import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/product/viewModel';
import tmpl from 'App/entities/product/tmpl.handlebars';


export default class extends ImView {

    filterMountain() {
        console.log("heyMountain");
        //let filters = ["Montagne","e-Montagne", "Gravel"];
        let filter= "Montagne";
        this.collection.metadata.set(filter);
    }
    filterCity() {
        console.log("heyCity");
        //let filters = ["Route","e-Route", "Gravel"];
        let filter= "Route";
        this.collection.metadata.set(filter);
    }
    filterEBike() {
        console.log("heyEBike");
        //let filters = ["e-Route","e-Montagne"];
        let filter= "e-Montagne";
        this.collection.metadata.set(filter);
    }
    initialize(attrs) {
        $("#filterMountain").on("click",()=> this.filterMountain());
        $("#filterCity").on("click",()=> this.filterCity());
        $("#filterEBike").on("click",()=> this.filterEBike());
        this.wishlist = attrs.wishlist;
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.listenTo(this.collection.metadata, 'change:filter', this.render);
    }

    render() {
        this.$el.empty();
        let models = this.collection.models;
        let filter = this.collection.metadata.get('filter');
        let dom = $(tmpl({models, filter}));
        dom.appendTo(this.$el);
        // console.log(this.filter);
        // for (let model of models) {
        //     if(model.attributes.category== this.filter){// "Route"changer par param filtre
        //         let view = new View({
        //             model, wishlist: this.wishlist
        //         })
        //         view.render().$el.appendTo(this.$el);
        //     }
        //     // let view = new View({
        //     //             model, wishlist: this.wishlist
        //     //         })
        //     // view.render().$el.appendTo(this.$el);
        //     console.log(model.attributes.category);
            
        // }
        return this;
    }

}