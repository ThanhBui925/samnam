import { createApp } from 'vue';
import AdminApp from './components/admin/App.vue';
import adminRouter from './router/admin';
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';


createApp(AdminApp).use(adminRouter).mount('#admin');


