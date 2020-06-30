//IMPORT
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import Products from 'App/entities/product/collection.js';
import Wishlist from 'App/entities/product/collectionWishlist.js';
import Reviews from 'App/entities/review/collection.js'; 
import People from 'App/entities/person/collection.js';

import Productscollection from 'App/entities/product/viewCollection';
import Reviewscollection from 'App/entities/review/viewCollection'; 
import Peoplecollection from 'App/entities/person/viewCollection';

//FIRST TEST
console.log('hello from frontend')

//CODE
let products = new Products();
let productsWishlist = new Wishlist();
let reviews = new Reviews(); 
let view = new Products();
let people = new People();


let vproducts = new Productscollection({
    collection : products,
    el: '#catalogue'
});

let vproductsWishlist = new Productscollection({
    collection : wishlist,
    el: '#wishlist'
}); 

let vreviews = new Reviewscollection({
    collection : reviews,
    el: '#reviews'
}); 

let vpeople = new Peoplecollection({
    collection : people,
    el: '#people'
}); 

/* 
console.log(vproducts);
console.log(vproductsWishlist);
let view = new Productscollection({
    collection: products,
    el: '#product'
}); */


products.fetch();
productsWishlist.fetch();
reviews.fetch();
people.fetch();






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