require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy'

Vue.use(Buefy);

// Profile right nav-menu toggle OPEN|CLOSE class
$('button.dropdown').hover(function(){
    $(this).toggleClass("is-open");
});

var app= new Vue({

    el: '#app',
    data: {

        auto_password: autopass,
        password_options: 'keep',
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete'],
        rolesSelected: rols,
        permissionsSelected: perm

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
        }
    }

});

