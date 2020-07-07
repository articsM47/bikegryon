//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/wishlist/tmpl_wishlist.handlebars';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialize 
    initialize(attrs, options) {
        //it take the attribute and it's put on this.wishlist
        this.wishlist = attrs.wishlist;
        //for listen some change on page
        this.listenTo(this.model, 'change', this.render);
    }

    //For listen to clicks on classes
    events() {
        return {
            'click .wishRemove': 'delFromWish',
        }
    }

    //fonction for remove a bike from the wishlist
    delFromWish() {
        this.wishlist.remove(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
    }

    //render of this view
    render() {
        let dom = $(tmpl({ ...this.model.toJSON() }));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}