import { createApp } from 'vue';
import ClientApp from './components/client/App.vue';
import clientRouter from './router/client';

createApp(ClientApp).use(clientRouter).mount('#client');

