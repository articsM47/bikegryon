import {ImView} from 'lib/ImBackbone';
import tmpl from 'entities/filters-Test/tmpl.handlebars';

export default class extends ImView {

  events() {
    return {

      'click #showHistory': 'switchShowHistory',
      'change #courses-filter': 'setFilterCourse'
    }
  }
  
  switchShowHistory(evt) {
    let history = $(evt.currentTarget).prop('checked');
    this.collection.metadata.set({history});
  }

  setFilterClass(evt) {
    let btn = $(evt.currentTarget);
    let filter = btn.data('class');
    let filterType = 'class';
    this.collection.metadata.set({filter, filterType});
  }

  initialize(attrs, options) {
    this.listenTo(this.collection, 'reset sort change:class', this.render);
    this.listenTo(this.collection.metadata, 'change:filter', this.render);
  }

  render() {
    this.$el.empty();
    let classes = Object.keys(this.collection.groupBy('class'));
    let courses = Object.keys(this.collection.groupBy('label'));
    classes.sort((c1, c2) => c1.localeCompare(c2));
    courses.sort((c1, c2) => c1.localeCompare(c2));
    let filter = this.collection.metadata.get('filter');
    let dom = $(tmpl({classes, courses, filter}));
    dom.appendTo(this.$el);
    return this;
  }

}















// render() {
//   this.$el.empty();
//   let classes = Object.keys(this.collection.groupBy('class'));
//   let courses = Object.keys(this.collection.groupBy('label'));
//   classes.sort((c1, c2) => c1.localeCompare(c2));
//   courses.sort((c1, c2) => c1.localeCompare(c2));
//   let filter = this.collection.metadata.get('filter');
//   let dom = $(tmpl({classes, courses, filter}));
//   dom.appendTo(this.$el);
//   return this;
// }

//   setFilterClass(evt) {
//     let btn = $(evt.currentTarget);
//     let filter = btn.data('class');
//     let type = "class";
//     this.collection.metadata.set({filter, type});
//   }

//   changeCourseFilter(evt) {
//     let filter = $(evt.currentTarget).find(':selected').data('filter');
//     let type = "label";
//     this.collection.metadata.set({filter, type});
//   }

//   changeShowHistory(evt) {
//     let history = $(evt.currentTarget).prop("checked");
//     this.collection.metadata.set({history});
//   }
