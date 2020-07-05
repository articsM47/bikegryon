import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/person/viewModel';


export default class extends ImView {

    initialize() {
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.initAddBadgePopup();
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
        return this;
    }

    initAddBadgePopup() {
        let self = this;
        $("#people-table").on("click", ".button-add-badge", (event) => {
            self.resetAddBadgePopup(event);
            $("#popup-add-badge").show();
        });

        $("#submit-badge").on("click", () => {
            self.submitBadge();
        });

        $("#btn-close-add-badge").on("click", () => {
            $("#popup-add-badge").hide();
        });
    }

    resetAddBadgePopup(event) {
        $('#input-client-badge').val('');
        const clientId = $(event.target).closest("tr").data("client-id");
        $('input[name="clientId"]').val(clientId);
        const testDayId = $(event.target).closest("tr").data("test-day-id");
        $('input[name="testDayId"]').val(testDayId);
    }

    submitBadge() {
        let collection = this.collection;
        let inputClientId = $('input[name="clientId"]').val();
        let inputTestDayId = $('input[name="testDayId"]').val();
        let badgeNo = $('#input-client-badge').val();
        let csrfToken = $('#csrf-token').val();
        $.ajax({
            type: "POST",
            url: baseURL + "/Member/Badge",
            data: {
                _token: csrfToken,
                clientId: inputClientId,
                testDayId: inputTestDayId,
                badgeNo: badgeNo               
            },
            success: () => {
                collection.fetch(); // On refresh au moment de la réponse du serveur
            },
            complete: () => {
                $("#popUpReview").hide();
            }
        });
    }
}