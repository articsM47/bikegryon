
import Wishlist from 'App/entities/product/collectionWishlist.js'; 
import ViewWishes from 'App/entities/product/viewCollectionWishlist';

let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));
console.log(wishlist);

let view = new ViewWishes({
  collection: wishlist,
  //wishlist,
  el: '#wishlist_products'
});

view.render();