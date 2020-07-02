
import Wishlist from 'App/entities/product/collectionWishlist.js'; 
import ViewWishes from 'App/entities/product/viewCollection';

let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

new ViewWishes({
  collection: wishlist,
  el: '#wishlist'
});

console.log(wishlist);
console.log('test');