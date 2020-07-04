/* import Reviews from 'App/entities/test/collection.js';  
 import Reviewscollection from 'App/entities/test/viewCollection';   */

import Tests from 'App/entities/Test/collection.js';
import Testscollection from 'App/entities/Test/viewCollection'; 

let tests = new Tests();

let vtests= new Testscollection({
    collection : tests,
    el: '#tests'
}); 

$("#addTest").on("click", () => {
    console.log('hellohello');
    $("#popupField").show();
        $("#btn-close").on("click", () => {
            $("#popupField").hide();
        })
})
tests.fetch();

// //New test modal
// $('#addTestModal').modal({
//     show: true
// })
// $('#startTest').modal({
//     show: false
// })





