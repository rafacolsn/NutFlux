import Login from './components/AccountsLogin.vue';
import UsersIndex from './components/UsersIndex.vue';


export default [
    {name: 'login', path: '/login', component: Login},
    {name: 'home', path: '/', component: Login},
    {name: 'users', path: '/users', component: UsersIndex}
]
