//IMPORTS
import {
    ImCollection
}
from 'lib/ImBackbone';
import Model from 'App/entities/Test/model';

//CODE
//EXPORT CLASS ImCollection
export default class extends ImCollection {

    //URL for the api with the tests
    url() {
        return 'http://127.0.0.1:8000/api/tests/';
    }

    //Return of the model with attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}