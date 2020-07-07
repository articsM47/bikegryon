//IMPORTS
import {
    ImCollection
   
}
from 'lib/ImBackbone';
import Model from 'App/entities/wishlist/model';

//CODE
//EXPORT CLASS ImCollection
export default class extends ImCollection {

    //NO URL because is a localstorage

    //it takes the model with the attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}