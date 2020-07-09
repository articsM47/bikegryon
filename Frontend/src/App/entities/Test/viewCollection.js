//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/Test/viewModel';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialize 
    initialize() {
        //for listen add, remove and reset on page
        this.listenTo(this.collection, 'add remove reset', this.render);
        //call of this functions
        this.initAddTestPopup();
        this.initTestReviewPopup();
        this.initChronometer();

    }


    //Pop-up for add a test 
    initAddTestPopup() {
        let self = this;
        $("#add-test").on("click", () => {
            self.resetAddTestPopup();
            $("#popupField").show();
        });

        $("#submit-test").on("click", () => {
            self.createTest();
        });

        $("#btn-close").on("click", () => {
            $("#popupField").hide();
        });
    }

    //Pop-up for add a review after test
    initTestReviewPopup() {
        let self = this;
        $("#tests-table").on("click", ".end-test-review", (event) => {
            self.resetTestReviewPopup(event);
            $("#popUpReview").show();
        })

        $("#submit-review").on("click", () => {
            self.submitReview();
        });

        $("#close-review").on("click", () => {
            $("#popUpReview").hide();
        });
    }

    //initialize the chronometer for the time of whole test
    initChronometer() {
        let self = this;

        setInterval(() => {
            self.allDuration();
        }, 1000);

    }

    //Reset of Pop up for add the review
    resetTestReviewPopup(event) {
        $('input[name="question1"]').prop('checked', false);
        $('input[name="question2"]').prop('checked', false);
        $('input[name="question3"]').prop('checked', false);
        $('input[name="question4"]').prop('checked', false);
        const testid = $(event.target).closest("tr").find("th:first").text();
        $('#test-id').val(testid);
    }

    //Reset of Pop up for add a test
    resetAddTestPopup() {
        // reset of inputs values
        $('#input-client-number').val('');
        $('#input-bike').val('');
    }

    //For create a test 
    createTest() {
        //it takes the collection
        let collection = this.collection;
        //it takes the values
        let inputClientNumber = $('#input-client-number').val();
        let inputBike = $('#input-bike').val();
        let csrfToken = $('#csrf-token').val();
        $.ajax({
            type: "POST",
            url: baseURL + "Test",
            data: {
                _token: csrfToken,
                badgeNo: inputClientNumber,
                distinctiveSign: inputBike
            },
            success: () => {
                collection.fetch(); //Refresh when server answers
            },
            complete: () => {
                $("#popupField").hide();
            }
        });
    }

    //Create Review
    submitReview() {
        //it takes the collection
        let collection = this.collection;
        //it takes the values
        let inputQuestion1 = $('input[name="question1"]:checked').val();
        let inputQuestion2 = $('input[name="question2"]:checked').val();
        let inputQuestion3 = $('input[name="question3"]:checked').val();
        let inputQuestion4 = $('input[name="question4"]:checked').val();
        let testId = $('#test-id').val();
        let csrfToken = $('#csrf-token').val();
        $.ajax({
            type: "POST",
            url: baseURL + "Test/Review",
            data: {
                _token: csrfToken,
                testId: testId,
                question1: inputQuestion1,
                question2: inputQuestion2,
                question3: inputQuestion3,
                question4: inputQuestion4
            },
            success: () => {
                collection.fetch(); // On refresh au moment de la réponse du serveur
            },
            complete: () => {
                $("#popUpReview").hide();
            }
        });
    }

    //Chronometer
    allDuration() {
        let self = this;
        this.$el.find('tr').each((index, value) => {
            let tr = $(value);
            let creationTime = tr.data('creationtime');
            let nowDate = new Date();
            let nowTime = Math.round(nowDate.getTime() / 1000);
            console.log(creationTime)
            let retard = 80; // retard serveur de présentation 
            let duration = self.formatDuration(nowTime - creationTime + retard);

            tr.find('.data-chronometer').text(duration);
        })
    }

    //Chronometer
    formatDuration(duration) {
        var sec_num = parseInt(duration, 10); // don't forget the second param
        var hours = Math.floor(sec_num / 3600);
        var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
        
        var seconds = sec_num - (hours * 3600) - (minutes * 60);

        if (hours < 10) { hours = "0" + hours; }
        if (minutes < 10) { minutes = "0" + minutes; }
        if (seconds < 10) { seconds = "0" + seconds; }

        return hours + ':' + minutes + ':' + seconds;

    }

    render() {
        this.$el.empty();
        let models = this.collection.models;

        for (let model of models) {
            let view = new View({
                model
            })
            view.render().$el.appendTo(this.$el);
        }
        this.allDuration();
        return this;
    }


}