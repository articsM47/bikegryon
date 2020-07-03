import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl.handlebars';

export default class extends ImView {

    initialize(attrs, options) {
        this.wishlist = attrs.wishlist;
        this.model.set({ notWished: true });
        this.listenTo(this.model, 'change', this.render);
    }

    events() {
        return {

            'click .wishAdd': 'addToWish',
            'click .wishDel': 'delFromWish',

        }

    }

    addToWish() {
        this.wishlist.add(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ notWished: false });

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

       // let inWishlist = this.wishlist.get(this.model.get('id'));
       // let dom = $(tmpl({ ...this.model.toJSON(), inWishlist}));
       let dom = $(tmpl({...this.model.toJSON()}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}