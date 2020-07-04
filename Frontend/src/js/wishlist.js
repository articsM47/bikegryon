
import Wishlist from 'App/entities/wishlist/collectionWishlist.js'; 
import ViewWishes from 'App/entities/wishlist/viewCollectionWishlist';
import 'jspdf';

let wishlist = new Wishlist(JSON.parse(localStorage.getItem('wishlist')));

let view = new ViewWishes({
  collection: wishlist,
  wishlist,
  el: '#wishlist_products'
});

view.render();