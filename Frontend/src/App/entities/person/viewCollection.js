import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/person/viewModel';
//import tmplCollection from 'App/entities/product/tmpl_collecton.handlebars';


export default class extends ImView {

    initialize() {
     
        this.listenTo(this.collection, 'add remove reset', this.render);
    }

    // trier ça se passe ici 
    render() {
        this.$el.empty();
        let models = this.collection.models;

        for (let model of models) {
            let view = new View({
                model
            })
            view.render().$el.appendTo(this.$el);
        }
        return this;
    }

}