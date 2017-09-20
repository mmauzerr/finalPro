require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy'

Vue.use(Buefy);
//Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
    el: '#app',
    data:{
        auto_password: true,
        password_options: 'keep'
    }
});

$('button.dropdown').hover(function(){
    $(this).toggleClass("is-open");
});