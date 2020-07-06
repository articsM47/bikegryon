import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl.handlebars';

export default class extends ImView {

    initialize(attrs, options) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.model, 'change', this.render);
    }

    events() {
        return {
            'click .wishAdd': 'addToWish',
            'click .wishDel': 'delFromWish',
            'click .bikeDel': 'delete'
        }

    }

    addToWish() {
        this.wishlist.add(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ inWishlist: false });
    }

    delFromWish() {
        this.wishlist.remove(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
        this.model.set({ inWishlist: true });
    }

    edit() {

    }

    delete(evt) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce vélo?")) {
          this.model.destroy();
        }
      }

    restore() {

    }

    render() {

        let inWishlist = this.wishlist.get(this.model.get('id'));
        let dom = $(tmpl({ ...this.model.toJSON(), inWishlist}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}