import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/advice/tmpl.handlebars';

export default class extends ImView {

    initialize(attrs, options) {
        //this.wishlist = attrs.wishlist;
        this.listenTo(this.model, 'change', this.render);
    }

    events() {
        return {
        }

    }


    edit() {

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