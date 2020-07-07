//IMPORTS
import {
    ImCollection
}
    from 'lib/ImBackbone';
import Model from 'App/entities/person/model';

//CODE
//EXPORT CLASS ImCollection
export default class extends ImCollection {

    //call for the api
    url() {
        return 'http://127.0.0.1:8000/api/people/';
    }

    //Return of the model with attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}