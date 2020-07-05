import People from 'App/entities/person/collection.js';
import Peoplecollection from 'App/entities/person/viewCollection'; 

let people = new People();

let vpeople = new Peoplecollection({
    collection : people,
    el: '#people-table'
}); 

people.fetch();