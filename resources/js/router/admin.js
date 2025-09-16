import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../components/admin/Dashboard.vue';
import Users from '../components/admin/Users.vue';

const routes = [
    { path: '/admin', name: 'dashboard', component: Dashboard },
    { path: '/admin/users', name: 'users', component: Users },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
