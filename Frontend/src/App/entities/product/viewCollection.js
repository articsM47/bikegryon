import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/product/viewModel';


export default class extends ImView {

    initialize(attrs) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.collection, 'add remove reset', this.render);
    }

    render() {
        this.$el.empty();
        let models = this.collection.models;
        for (let model of models) {
            let view = new View({
                model, wishlist: this.wishlist
            })
            view.render().$el.appendTo(this.$el);
        }
        return this;
    }

}