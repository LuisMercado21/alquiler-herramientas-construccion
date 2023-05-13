import { createRouter, createWebHistory } from "vue-router";
import Home from '../views/Home.vue';
import Register from '../views/auth/Register.vue'
import Cart from '../views/Cart.vue';
import Login from '../views/auth/Login.vue';
import Search from '../views/Search.vue';


const routes = [
    {path: '/', name: 'paginaPrincipal', component: Home},
    {path: '/iniciarSesion', name: 'iniciarSesion', component: Login},
    {path: '/carritoCompras', name: 'carritoCompras', component: Cart},
    {path: '/registrarse', name: 'registrarse', component: Register},
    {path: '/buscar', name: 'buscar', component: Search}
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router