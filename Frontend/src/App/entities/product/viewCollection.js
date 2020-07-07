//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/product/viewModel';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialise
    initialize(attrs) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.initializeFilters();
    }

    //render of view with the wishlist
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

    //Initialize of category filters buttons
    initializeFilters() {
        var collection = this.collection;
        $('.button-catalogue').on('click', (event) => {
            var category = $(event.target).data('category');
            collection.meta('category', category);
            collection.fetch();
        });
    }

}