import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/advice/viewModel';


export default class extends ImView {

    initialize(attrs) {
        this.listenTo(this.collection, 'add remove reset', this.render);
    }

    render() {
        this.$el.empty();
        let models = this.collection.models;
        for (let model of models) {
            let view = new View({
                model,
            })
            view.render().$el.appendTo(this.$el);
        }
        return this;
    }

}