/* import Reviews from 'App/entities/test/collection.js';  
 import Reviewscollection from 'App/entities/test/viewCollection';   */

import Tests from 'App/entities/Test/collection.js';
import Testscollection from 'App/entities/Test/viewCollection'; 

let tests = new Tests();

let vtests= new Testscollection({
    collection : tests,
    el: '#tests'
}); 

$("#add-test").on("click", () => {
    $('#input-client-number').val('');
    $('#input-bike').val('');
    $("#popupField").show();
})

$("#submit-test").on("click", () => {
    let inputClientNumber = $('#input-client-number').val();
    let inputBike = $('#input-bike').val();
    let csrfToken =$('#csrf-token').val();
    $.ajax({
        type: "POST",
        url: baseURL + "/Test",
        data: {_token: csrfToken, badgeNo: inputClientNumber, distinctiveSign: inputBike},
        success: () => {
            tests.fetch(); // On refresh au moment de la réponse du serveur
        },
        complete: () => {
            $("#popupField").hide();
        }
    });
})

$("#btn-close").on("click", () => {
    $("#popupField").hide();
})

tests.fetch();





