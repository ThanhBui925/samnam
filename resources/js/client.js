import { createApp } from 'vue';
import ClientApp from './components/client/App.vue';
import clientRouter from './router/client';
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';


createApp(ClientApp).use(clientRouter).mount('#client');

