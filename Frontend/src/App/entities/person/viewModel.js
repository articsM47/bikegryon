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
        let email = this.$el.find('.people-input-email').val();
        let badge = this.$el.find('.people-input-badge').val();
        this.model.set({email, badge, editable: false});
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
