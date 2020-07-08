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
        return 'http://pingouin1.heig-vd.ch/artics/api/people/';
    }

    //Return of the model with attributes
    model(attrs, options) {
        return new Model(attrs, options);
    }

}