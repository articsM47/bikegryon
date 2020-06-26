import {
    ImCollection
}
from 'lib/ImBackbone';
import Model from 'App/entities/product/model';

export default class extends ImCollection {

    url() {
        return 'http://127.0.0.1:8000/api/wishlist/';
    }


    model(attrs, options) {
        return new Model(attrs, options);
    }

}