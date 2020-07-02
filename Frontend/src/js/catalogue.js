import Products from 'App/entities/product/collection.js';
import ViewProducts from 'App/entities/product/viewCollection';
import Wishlist from 'App/entities/product/collectionWishlist.js'; 

let products = new Products();
let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

let vproducts = new ViewProducts({
    collection : products,
    wishlist: wishlist,
    el: '#catalogue'
});

products.fetch();
