import {
    ImModel
}
from 'lib/ImBackbone';

export default class extends ImModel {

    //todo : validate 
    /* validate(attrs) {
        let props = ['class', 'label', 'room', 'start', 'end', 'id'];
        let errors = [];
        for (const attr in attrs) {
            if (!props.includes(attr)) {
                errors.push(`${attr} is not an allowed propertie`);
            }
        }
        for (let prop of props) {
            if (prop == 'id') continue;
            if (_.isNull(attrs[prop]) || !_.isString(attrs[prop]) || attrs[prop].trim() == '') {
                errors.push('The ' + prop + ' must be a non-empty string');
            }
        }
        if (errors.length == 0) return;
        if (errors.length == 1) return errors[0];
        return errors;
    } */

}