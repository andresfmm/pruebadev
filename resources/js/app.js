require('./bootstrap');

window.Vue = require('vue').default;

require('./scripts/index');


Vue.component('cotizacion', require('./components/Cotizacion.vue').default);

const app = new Vue({
    el: '#app'
});