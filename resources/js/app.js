
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
Vue.component( 'users-show', require( './components/UsersShow.vue' ).default );
Vue.component( 'users-index', require( './components/UsersIndex.vue' ).default );
Vue.component( 'users-edit', require( './components/UsersEdit.vue' ).default );
Vue.component( 'users-create', require( './components/UsersCreate.vue' ).default );

/* Actors components */
Vue.component( 'actors-show', require( './components/ActorsShow.vue' ).default );
Vue.component( 'actors-index', require( './components/ActorsIndex.vue' ).default );
Vue.component( 'actors-create', require( './components/ActorsCreate.vue' ).default );
Vue.component( 'actors-edit', require( './components/ActorsEdit.vue' ).default );

/* Medias components */
Vue.component( 'medias-show', require( './components/MediasShow.vue' ).default );
Vue.component( 'medias-index', require( './components/MediasIndex.vue' ).default );
Vue.component( 'medias-edit', require( './components/MediasEdit.vue' ).default );
Vue.component( 'medias-create', require( './components/MediasCreate.vue' ).default );

/* Accounts components */
Vue.component( 'accounts-show', require( './components/AccountsShow.vue' ).default );
Vue.component( 'accounts-create', require( './components/AccountsCreate.vue' ).default );
Vue.component( 'accounts-edit', require( './components/AccountsEdit.vue' ).default );
Vue.component( 'accounts-login', require( './components/AccountsLogin.vue' ).default );

/* Choices components */
Vue.component( 'choices-index', require( './components/ChoicesIndex.vue' ).default );
Vue.component( 'choices-show', require( './components/ChoicesShow.vue' ).default );
Vue.component( 'choices-create', require( './components/ChoicesCreate.vue' ).default );
/* This component was viewed as unecessary (the app will only allow a user to add a media to its list or remove it from the list) */
//Vue.component( 'choices-edit', require( './components/ChoicesEdit.vue' ) );
/* --- */

/* Search components */
Vue.component( 'search-field', require( './components/SearchField.vue' ).default );
Vue.component( 'search-results', require( './components/SearchResults.vue' ).default );

/* Menu components */
Vue.component('nav-menu', require('./components/NavMenu.vue').default);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue( {
    el: '#app'
} );

const menu = new Vue( {
    el: '#nav'
} );
