import {
    ImCollection
   
}
from 'lib/ImBackbone';

//import {LocalStorage} from 'backbone.localstorage';

import Model from 'App/entities/product/model';

// export default Backbone.Collection.extend({

//     localStorage: new LocalStorage('wishlist'), // Uniquely identify this

//     model: function(attrs, options){
//         return new Model(attrs, options);
//     }

//   });


export default class extends ImCollection {

    model(attrs, options) {
        return new Model(attrs, options);
    }

}