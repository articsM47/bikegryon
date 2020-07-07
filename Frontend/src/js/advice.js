
import Advice from 'App/entities/advice/collection.js'; 
import ViewAdvices from 'App/entities/advice/viewCollection';

let advice = new Advice();

let vadvice = new ViewAdvices({
  collection: advice,
  el: '#advice'
});

advice.fetch();