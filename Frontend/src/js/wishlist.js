
//IMPORTS
import Wishlist from 'App/entities/wishlist/collectionWishlist.js';
import ViewWishes from 'App/entities/wishlist/viewCollectionWishlist';

//CODE
//Get products from LocalStorage in the right format with the right collection
let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

//bring the collection wishlist at the view with the right element on the right page for the render 
let view = new ViewWishes({
  collection: wishlist,
  wishlist: wishlist,
  el: '#wishlist_products'
});

//Render of view
view.render();