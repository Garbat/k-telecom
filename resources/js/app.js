require('./bootstrap');
import {createApp} from 'vue';
import root from './root';
import {createRouter, createWebHistory} from 'vue-router';
import {routes} from './routes';
import ElementIO from 'element-plus';
import 'element-plus/dist/index.css'

const router = createRouter({
    history: createWebHistory(),
    routes: routes
});
const app = createApp(root);
app.use(router);
app.use(ElementIO);
router.app = app;
app.mount('#app');

