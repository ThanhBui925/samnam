import { createApp } from 'vue';
import AdminApp from './components/admin/App.vue';
import adminRouter from './router/admin';

createApp(AdminApp).use(adminRouter).mount('#admin');


