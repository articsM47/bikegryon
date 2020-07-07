//IMPORTS
import {
  ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/person/tmpl.handlebars';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

  //It save the model on this.model
  initialize(attrs, options) {
    this.listenTo(this.model, 'change', this.render);
  }

  //render of the view
  render() {
    let dom = $(tmpl(this.model.toJSON()));
    this.$el.replaceWith(dom);
    this.setElement(dom);
    return this;
  }


}
