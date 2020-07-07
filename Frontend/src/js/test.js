import Tests from 'App/entities/Test/collection.js';
import Testscollection from 'App/entities/Test/viewCollection';

let tests = new Tests();

let vtests = new Testscollection({
    collection: tests,
    el: '#tests-table'
});

tests.fetch();