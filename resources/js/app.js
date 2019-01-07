
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const axios = require('axios');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

/* Medias components */
Vue.component( 'users-show', require( './components/UsersShow.vue' ) );
Vue.component( 'users-index', require( './components/UsersIndex.vue' ) );
Vue.component( 'users-edit', require( './components/UsersEdit.vue' ) );
Vue.component( 'users-create', require( './components/UsersCreate.vue' ) );

/* Actors components */
Vue.component( 'actors-show', require( './components/ActorsShow.vue' ) );
Vue.component( 'actors-index', require( './components/ActorsIndex.vue' ) );
Vue.component( 'actors-create', require( './components/ActorsCreate.vue' ) );
Vue.component( 'actors-edit', require( './components/ActorsEdit.vue' ) );
Vue.component( 'actors-create', require( './components/ActorsCreate.vue' ) );

/* Medias components */
Vue.component( 'medias-show', require( './components/MediasShow.vue' ) );
Vue.component( 'medias-index', require( './components/MediasIndex.vue' ) );
Vue.component( 'medias-edit', require( './components/MediasEdit.vue' ) );
Vue.component( 'medias-create', require( './components/MediasCreate.vue' ) );

/* Accounts components */
Vue.component( 'accounts-show', require( './components/AccountsShow.vue' ) );
Vue.component( 'accounts-create', require( './components/AccountsCreate.vue' ) );


/* Choices components */
Vue.component('choices-index', require('./components/ChoicesIndex.vue'));

/* Menu components */
Vue.component('nav-menu', require('./components/NavMenu.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue( {
    el: '#app'
});




