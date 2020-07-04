import { ImView } from 'lib/ImBackbone';
import tmpl from 'App/entities/Test/tmpl_review.handlebars';


export default class extends ImView {

    initialize(attrs, options) {
        this.listenTo(this.model, 'change add remove reset', this.render);
    }

    events() {
        return {
            'click [data-action="create"]': 'create',
            'click [data-action="delete"]': 'delete'
        }
    }

    /* // pas fini 
          showProduct(id) {
              // prendre le produit
              let id = this.model.id;
              console.log(product)
              modal .show 
              this.view.add(product);
          }
     */

    // Allows to show "create à new test"'s popup
    create(evt) {

        


    }

    delete() {

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