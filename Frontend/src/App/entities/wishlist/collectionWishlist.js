import {
    ImCollection
   
}
from 'lib/ImBackbone';

import Model from 'App/entities/wishlist/model';


export default class extends ImCollection {

    model(attrs, options) {
        return new Model(attrs, options);
    }

}