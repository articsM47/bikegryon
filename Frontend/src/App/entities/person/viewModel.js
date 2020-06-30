import {
    ImView
} from 'lib/ImBackbone';
import tmpl from 'App/entities/person/tmpl.handlebars';


export default class extends ImView {

    events() {
        return {
          'click [data-action="edit"]': 'edit',
          'click [data-action="modify"]': 'modify',
        }
      }
    
      //entrer dans le menu pour editer la tache
      edit(evt) {
        this.model.set({editable: true});
      }
    
      //modifier la tache 
      modify(evt) {
        let task = this.$el.find('.tasks-input-task').val(); // On récupère les champs de l'HTML correspondant
        // Conversion d'un champ date en timestamp Unix (en seconde)
        let dateInput = this.$el.find('.tasks-input-time').val();
        let date = new Date(dateInput);
        let time = Math.round(date.getTime() / 1000);
        this.model.set({task, time, editable: false});
        this.model.save();
      }
    
    
      //methodes obbligatoire
      //va sauver le modèle sur this.model
      initialize(attrs, options) {
        this.listenTo(this.model, 'change', this.render);
      }
    
      //affichage de la vue
      render() {
        let dom = $(tmpl(this.model.toJSON()));
        this.$el.replaceWith(dom);
        this.setElement(dom);
        return this;
      }
    
    
    }
}