import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl.handlebars';


export default class extends ImView {

    initialize(attrs, options) {
    this.listenTo(this.model, 'change', this.render);
    }


    events() {

    }

    edit() {

    }

    del() {

    }

    restore() {

    }


    render() {
        let dom = $(tmpl(this.model.toJSON()));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}