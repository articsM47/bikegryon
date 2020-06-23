import Backbone from 'Backbone';

export class ImModel extends Backbone.Model {

  /* initialize(attrs, options) {
    this.on('invalid', (model, error) => console.error(error));
    if (this.validationError) console.error(this.validationError);
  }

  set(key, val, options) {
    if (typeof key === 'object') {
      super.set(key, _.extend({validate: true}, val));
    } else {
      super.set(key, val, _.extend({validate: true}, options));
    }
  } */

}

export class ImView extends Backbone.View {

}

export class ImCollection extends Backbone.Collection {

}