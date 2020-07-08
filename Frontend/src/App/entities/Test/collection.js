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
        return 'http://pingouin1.heig-vd.ch/artics/api/tests/';
    }

    //Return of the model with attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}