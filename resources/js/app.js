
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'


import store from './store';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import routes from './routes';

let router = new VueRouter({ routes });

const app = new Vue({
    router,
    store,
    el: '#app',
    beforeMount(){
        this.$store.dispatch('tasks/GET_TASKS')
    },
    components: {
        'navigation': require('./components/utils/navigation.vue')
    }

});

