import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/Test/viewModel';

export default class extends ImView {

    initialize() {
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.initAddTestPopup();
        this.initTestReviewPopup();
        this.initChronometer();

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
    initChronometer(){
        let self=this;

        setInterval(() => {    
            self.allDuration(); 
          }, 1000);

    }

    resetTestReviewPopup(event) {
        $('input[name="question1"]').prop('checked', false);
        $('input[name="question2"]').prop('checked', false);
        $('input[name="question3"]').prop('checked', false);
        $('input[name="question4"]').prop('checked', false);
        const testid = $(event.target).closest("tr").find("th:first").text();
        $('#test-id').val(testid);
    }

    resetAddTestPopup() {
        // Remise à 0 des inputs
        $('#input-client-number').val('');
        $('#input-bike').val('');
    }

    createTest() {
        let collection = this.collection;
        let inputClientNumber = $('#input-client-number').val();
        let inputBike = $('#input-bike').val();
        let csrfToken = $('#csrf-token').val();
        $.ajax({
            type: "POST",
            url: baseURL + "/Test",
            data: {
                _token: csrfToken,
                badgeNo: inputClientNumber,
                distinctiveSign: inputBike
            },
            success: () => {
                collection.fetch(); // On refresh au moment de la réponse du serveur
            },
            complete: () => {
                $("#popupField").hide();
            }
        });
    }

    submitReview() {
        let collection = this.collection;
        let inputQuestion1 = $('input[name="question1"]:checked').val();
        let inputQuestion2 = $('input[name="question2"]:checked').val();
        let inputQuestion3 = $('input[name="question3"]:checked').val();
        let inputQuestion4 = $('input[name="question4"]:checked').val();
        let testId = $('#test-id').val();
        let csrfToken = $('#csrf-token').val();
        $.ajax({
            type: "POST",
            url: baseURL + "/Test/Review",
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

    allDuration(){
        let self=this;
        this.$el.find('tr').each((index, value)=>{
            let tr = $(value);
            let creationTime = tr.data('creationtime');
            let nowDate = new Date ();
            let nowTime = Math.round(nowDate.getTime() / 1000);
            
            let duration = self.formatDuration(nowTime-creationTime);

            tr.find('.data-chronometer').text(duration);
        })
    }

    formatDuration(duration){
        console.log(duration)

            var sec_num = parseInt(duration, 10); // don't forget the second param
            var hours   = Math.floor(sec_num / 3600);
            var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            var seconds = sec_num - (hours * 3600) - (minutes * 60);
        
            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}

            return hours+':'+minutes+':'+seconds;

    }


}