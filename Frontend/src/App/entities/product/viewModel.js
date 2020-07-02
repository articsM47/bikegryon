import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/product/tmpl.handlebars';
import JsonStorage from "lib/JsonStorage";


export default class extends ImView {

    initialize(attrs, options) {
        this.wishlist = attrs.wishlist;
    this.listenTo(this.model, 'change', this.render);
    }


    events() {
        return {
            'click .wishAdd': 'addToWish',
            'click .wishDel': 'delFromWish',
        }

    }

    addToWish(){
        this.wishlist.add(this.model);
        console.log(JSON.stringify(this.wishlist));  
        let data=JSON.stringify(this.wishlist); 
        localStorage.setItem('wishlist', data);
        console.log("data");  
        console.log(data);  
    }

    delFromWish(){
        this.wishlist.remove(this.model);
        let data=JSON.stringify(this.wishlist); 
        localStorage.setItem('wishlist', data);
       
    }
    

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