import Products from 'App/entities/product/collection.js';
import Productscollection from 'App/entities/product/viewCollection';

let products = new Products();

let vproducts = new Productscollection({
    collection : products,
    el: '#catalogue'
});

products.fetch();