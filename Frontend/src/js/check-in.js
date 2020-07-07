//IMPORTS
import People from 'App/entities/person/collection.js';
import Peoplecollection from 'App/entities/person/viewCollection';

//CODE
//New collection of people
let people = new People();

//bring the collection people at the view (with the right element on the right page) for display it
let vpeople = new Peoplecollection({
    collection: people,
    el: '#people-table'
});

//Fetch of collection
people.fetch();