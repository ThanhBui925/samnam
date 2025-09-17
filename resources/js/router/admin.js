import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../components/admin/Dashboard.vue';
import Users from '../components/admin/Users.vue';
import Categories from '../components/admin/categories/Categories.vue';
import ShowCategory from '../components/admin/categories/ShowCategory.vue';
import CreateCategory from '../components/admin/categories/CreateCategory.vue';

const routes = [
    { path: '/admin', name: 'dashboard', component: Dashboard },
    { path: '/admin/users', name: 'users', component: Users },
    { path: '/admin/categories', name: 'categories', component: Categories },
    { path: '/admin/categories/:slug', name: 'show-category', component: ShowCategory, props: true },
    { path: '/admin/categories/create', name: 'create-category', component: CreateCategory },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
