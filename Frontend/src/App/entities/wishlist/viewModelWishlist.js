import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/wishlist/tmpl_wishlist.handlebars';

export default class extends ImView {

    initialize(attrs, options) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.model, 'change', this.render);
    }

    events() {
        return {
            'click .wishRemove': 'delFromWish',
        }

    }

    delFromWish() {
        this.wishlist.remove(this.model);
        let data = JSON.stringify(this.wishlist);
        localStorage.setItem('wishlist', data);
    }


    edit() {

    }

    del() {

    }

    restore() {

    }


    render() {
       let dom = $(tmpl({...this.model.toJSON()}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}