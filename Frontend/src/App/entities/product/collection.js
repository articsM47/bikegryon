import {
    ImCollection
}
from 'lib/ImBackbone';
import Model from 'App/entities/product/model';

export default class extends ImCollection {

    initialize () {
        this._meta = {};
    }

    meta(prop, value) {
        if (value === undefined) {
            return this._meta[prop];
        } else {  
            this._meta[prop] = value;
        }
    }

    url() {
        // si category est présent on l'ajoute à l'appel
        // return 'http://127.0.0.1:8000/api/bikes?category='+this.category;
        let category = this.meta('category');
        if (category) {
            return 'http://127.0.0.1:8000/api/bikes?category=' + category;
        } else {
            return 'http://127.0.0.1:8000/api/bikes/';
        }
    }


    model(attrs, options) {
        return new Model(attrs, options);
    }

}