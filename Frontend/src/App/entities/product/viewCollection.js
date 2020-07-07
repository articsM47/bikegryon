import {
    ImView
} from 'lib/ImBackbone';
import View from 'App/entities/product/viewModel';


export default class extends ImView {

    initialize(attrs) {
        this.wishlist = attrs.wishlist;
        this.listenTo(this.collection, 'add remove reset', this.render);
        this.initializeFiltersCategory();
        this.initializeFiltersBrand();
    }

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

    initializeFiltersBrand() {
        let collection = this.collection;
        $('.dropdown-item').on('click', (event) => {
            let brand_id = $(event.target).attr('data-brand');
            switch (brand_id) {
                case "1":
                    $('#dropdownMenuButton').text("Lapierre");
                  break;
                  case "2":
                    $('#dropdownMenuButton').text("BMC");
                  break;
                  case "3":
                    $('#dropdownMenuButton').text("Scott");
                  break;
                  case "4":
                    $('#dropdownMenuButton').text("Merida");
                  break;
                  case "5":
                    $('#dropdownMenuButton').text("Centurion");
                  break;
                  case "6":
                    $('#dropdownMenuButton').text("Wilier");
                  break;
                default:
                    $('#dropdownMenuButton').text("Marque");
              }
            collection.meta('brand', brand_id);
            collection.fetch();
        });
    }

}