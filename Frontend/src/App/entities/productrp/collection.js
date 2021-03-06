//IMPORTS
import {
    ImCollection
}
from 'lib/ImBackbone';
import Model from 'App/entities/productrp/model';

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
        let category = this.meta('category');
        let brand_id = this.meta('brand');
        if (category) {
            if(brand_id){
                return 'http://pingouin1.heig-vd.ch/artics/api/bikes?category=' + category + '&brand_id='+ brand_id;
            }else{
                return 'http://pingouin1.heig-vd.ch/artics/api/bikes?category=' + category;
            }
        } else {
            if(brand_id){
                return 'http://pingouin1.heig-vd.ch/artics/api/bikes?brand_id=' + brand_id;
            }else{
                return 'http://pingouin1.heig-vd.ch/artics/api/bikes/';
            }
            
        }
    }

    //it return the model with the attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}