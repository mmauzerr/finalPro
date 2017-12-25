//noinspection JSUnresolvedFunction
require('./bootstrap');
require('./manage');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';


import Buefy from 'buefy'

Vue.use(Buefy);

//noinspection JSUnresolvedFunction
Vue.component('slugWidget', require('./components/slugWidget.vue'));

var app= new Vue({

    el: '#app',
    data: {
        auto_password: autopass,
        password_options: 'keep',
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete'],
        rolesSelected: rols,
        permissionsSelected: perm,
        title: '',
        slug: ''
    },
    methods: {
        crudName: function(item) {
            return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
            return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
            return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        updateSlug: function(val) {
            this.slug = val;
        }
    }

});

