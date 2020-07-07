//IMPORTS
import { ImView } from 'lib/ImBackbone';
import tmpl from 'App/entities/Test/tmpl_review.handlebars';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    initialize(attrs, options) {
        this.listenTo(this.model, 'change add remove reset', this.render);
    }

    render() {
        let dom = $(tmpl(this.model.toJSON()));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}