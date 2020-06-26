//IMPORT
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import Products from 'App/entities/product/collection.js';
import Wishslist from 'App/entities/product/collectionWishlist.js';

import Productscollection from 'App/entities/product/viewCollection';
//FIRST TEST
console.log('hello from frontend')

//CODE
let products = new Products();
let productsWishlist = new Wishlist();
//let view = new Products();


let vproducts = new Productscollection({
    collection : products,
    el: '#catalogue'
});

let vproductsWishlist = new Productscollection({
    collection : wishlist,
    el: '#wishlist'
});


console.log(vproducts)
console.log(vproductsWishlist)
/* let view = new Productscollection({
    collection: products,
    el: '#product'
}); */


products.fetch();
productssWishlist.fetch();

//service worker pour pwa 
/* const installWorker = workerPath => new Promise(async (resolve, reject) => {
    let worker = await navigator.serviceWorker.register(workerPath)
    $(worker).on("updatefound", evt => {
        $(evt.target.installing).on("statechange", evt => {
            if (evt.target.state === "installed") resolve();
        });
    });
}); */
//installWorker("sw.js").then(() => window.location.reload(true));