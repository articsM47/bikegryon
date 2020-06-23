console.log('hello from frontend')

import Products from 'App/entities/product/collection.js';
import Productscollection from 'App/entities/product/viewCollection';
let products = new Products();
let vproducts = new Productscollection({
    collection : products,
    el: '#container'
});
products.fetch();

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