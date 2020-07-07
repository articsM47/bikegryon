//IMPORTS
import Products from 'App/entities/product/collection.js';
import ViewProducts from 'App/entities/product/viewCollection';
import Wishlist from 'App/entities/wishlist/collectionWishlist.js';

//CODE
//new collection of products
let products = new Products();
//get the collection of products in the wishlist
let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

//bring the collection products with also the wishlist at the view (with the right element on the right page) for display it
let vproducts = new ViewProducts({
    collection: products,
    wishlist: wishlist,
    el: '#catalogue'
});

//Fetch of collection
products.fetch();