//IMPORTS
import {
    ImCollection
}
from 'lib/ImBackbone';
import Model from 'App/entities/product/model';

//CODE
//EXPORT CLASS ImView
export default class extends ImCollection {

    //initialize the metadata
    initialize () {
        this._meta = {};
    }

    //Management of metadata
    meta(prop, value) {
        if (value === undefined) {
            return this._meta[prop];
        } else {  
            this._meta[prop] = value;
        }
    }

    //call for the api
    url() {
        // if category is existing it's add on call
        var category = this.meta('category');
        if (category) {
            return 'http://127.0.0.1:8000/api/bikes?category=' + category;
        } else {
            return 'http://127.0.0.1:8000/api/bikes/';
        }
    }

    //it return the model with the attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}