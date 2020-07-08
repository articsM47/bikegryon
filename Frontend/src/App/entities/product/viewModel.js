//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl.handlebars';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialize
    initialize(attrs, options) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.model, 'change', this.render);
    }

    //click on buttons with classes 
    events() {
        return {
            'click .wishAdd': 'addToWish',
            'click .wishDel': 'delFromWish',
            //'click .bikeDel': 'delete'
        }

    }

    //fonction for add a bike on wishlist
    addToWish() {
        this.wishlist.add(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ inWishlist: false });
    }

    //fonction for delete a bike on wishlist
    delFromWish() {
        this.wishlist.remove(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ inWishlist: true });
    }

    // //fonction for delete a bike on the catalogue
    // delete(evt) {
    //     if (confirm("Êtes-vous sûr de vouloir supprimer ce vélo?")) {
    //       this.model.destroy();
    //     }
    //   }

    //render of the model with the management of the status of the bikes in the Localstorage
    render() {
        let inWishlist = this.wishlist.get(this.model.get('id'));
        let dom = $(tmpl({ ...this.model.toJSON(), inWishlist}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}