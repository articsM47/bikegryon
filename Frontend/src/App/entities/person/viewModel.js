import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/person/tmpl.handlebars';


export default class extends ImView {

    initialize(attrs, options) {
    this.listenTo(this.model, 'change', this.render);
    }

/* // pas fini
    events() {
        return {
            'click [data-action="show-product"]': 'show-product',
            'click [data-action="remove-from-cart"]': 'removeFromCart',
        }

    } */
/* // pas fini 
      showProduct(id) {
          // prendre le produit
          let id = this.model.id;
          console.log(product)
          modal .show 
          this.view.add(product);
      }
 */
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