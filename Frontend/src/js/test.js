//IMPORTS
import Tests from 'App/entities/Test/collection.js';
import Testscollection from 'App/entities/Test/viewCollection';

//CODE
//New collection of test
let tests = new Tests();

//bring the collection test at the view (with the right element on the right page) for display it
let vtests = new Testscollection({
    collection: tests,
    el: '#tests-table'
});

//Fetch of collection
tests.fetch();