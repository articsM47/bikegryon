//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/wishlist/viewModelWishlist';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialize 
    initialize(attrs) {
        //it take the attribute and it's put on this.wishlist
        this.wishlist = attrs.wishlist;
        //for listen some change on page
        this.listenTo(this.collection, 'add remove reset', this.render);
    }

    //render of this view
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