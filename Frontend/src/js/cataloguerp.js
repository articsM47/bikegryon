//IMPORTS
import Products_RP from 'App/entities/productrp/collection.js';//for role "representant"
import ViewProducts_RP from 'App/entities/productrp/viewCollection';//for role "representant"

//CODE
//new collection of products
let products_rp = new Products_RP();//for role "representant"
console.log("test rp");

//bring the collection products with also the wishlist at the view (with the right element on the right page) for display it
let vproducts_rp = new ViewProducts_RP({
    collection: products_rp,
    el: '#cataloguerp'
});

//Fetch of collection
products_rp.fetch();