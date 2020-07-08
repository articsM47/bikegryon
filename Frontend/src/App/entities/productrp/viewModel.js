//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/productrp/tmpl.handlebars';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialize
    initialize(attrs, options) {
        this.listenTo(this.model, 'change', this.render);
    }

    //click on buttons with classes 
    events() {
        return {
            'click .bikeDel': 'delete'
        }

    }

    //fonction for delete a bike on the catalogue
    delete(evt) {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce vélo?")) {
          this.model.destroy();
        }
      }

    //render of the model with the management of the status of the bikes in the Localstorage
    render() {
        let dom = $(tmpl({ ...this.model.toJSON()}));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
    }


}