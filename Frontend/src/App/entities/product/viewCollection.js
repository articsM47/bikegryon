//IMPORTS
import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/product/viewModel';

//CODE
//EXPORT CLASS ImView
export default class extends ImView {

    //Initialise
    initialize(attrs) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.initializeFiltersCategory();
    }

    //render of view with the wishlist
    render() {
        this.$el.empty();
        let models = this.collection.models;
        for (let model of models) {
            let view = new View({
                model, wishlist: this.wishlist
            })
            view.render().$el.appendTo(this.$el);
        }
        return this;
    }

    initializeFiltersCategory() {
        let collection = this.collection;
        $('.button-catalogue').on('click', (event) => {
            
            let classes= $(event.target).attr('class');
            $('.button-catalogue').removeClass("selected");
            if(classes=="button-catalogue selected"){
                
            }else{
                $(event.target).attr('data-category',$(event.target).attr('data-category-origin'));
                $(event.target).addClass("selected");
            }
            let category = $(event.target).attr('data-category');
            if(category!=""){
                $(event.target).attr('data-category',"");
            }else{
                $(event.target).attr('data-category',$(event.target).attr('data-category-origin'));
            }
            collection.meta('category', category);
            collection.fetch();
        });
    }

}