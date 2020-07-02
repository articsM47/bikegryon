//IMPORT
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'js/catalogue.js';
import 'js/check-in.js';
import 'js/test.js';
import 'js/wishlist.js';


//FIRST TEST
console.log('hello from frontend')



//CODE
/* let productsWishlist = new Wishlist();
let reviews = new Reviews(); 
let view = new Products(); */

 
/* 
let vproductsWishlist = new Productscollection({
    collection : wishlist,
    el: '#wishlist'
}); 

let vreviews = new Reviewscollection({
    collection : reviews,
    el: '#reviews'
}); 
 */

/* 
console.log(vproducts);
console.log(vproductsWishlist);

let view = new Productscollection({
    collection: products,
    el: '#product'
}); */

/* productsWishlist.fetch();
reviews.fetch();
 */




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