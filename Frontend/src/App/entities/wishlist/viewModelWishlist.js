import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl_wishlist.handlebars';

export default class extends ImView {

    initialize(attrs, options) {
   
        this.model.set({ notWished: true });
        this.listenTo(this.model, 'change', this.render);
    }

    events() {
        return {
            'click .wishDel': 'delFromWish',

        }

    }

    delFromWish() {
        this.wishlist.remove(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ notWished: true });

    }



    edit() {

    }

    del() {

    }

    restore() {

    }


    render() {

       let inWishlist = false;
       let dom = $(tmpl({ ...this.model.toJSON(), inWishlist}));
      // let dom = $(tmpl({...this.model.toJSON()}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}