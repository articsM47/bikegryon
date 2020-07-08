//IMPORTS
import Products from 'App/entities/product/collection.js';
import ViewProducts from 'App/entities/product/viewCollection';
import Products_RP from 'App/entities/product_rp/collection.js';
import ViewProducts_RP from 'App/entities/product_rp/viewCollection';
import Wishlist from 'App/entities/wishlist/collectionWishlist.js';

//CODE
//new collection of products
let products = new Products();
let products_rp = new Products_RP();
//get the collection of products in the wishlist
let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

//bring the collection products with also the wishlist at the view (with the right element on the right page) for display it
let vproducts = new ViewProducts({
    collection: products,
    wishlist: wishlist,
    el: '#catalogue'
});

let vproducts_rp = new ViewProducts_RP({
    collection: products_rp,
    wishlist: wishlist,
    el: '#catalogue_rp'
});


//Fetch of collection
products.fetch();
products_rp.fetch();