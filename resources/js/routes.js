import { createWebHistory, createRouter } from "vue-router";
import City from './components/City.vue';

// import CreateProduct from './components/CreateProduct.vue';
// import EditProduct from './components/EditProduct.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: City
    },
    // {
    //     name: 'create',
    //     path: '/create',
    //     component: CreateProduct
    // },
    // {
    //     name: 'edit',
    //     path: '/edit/:id',
    //     component: EditProduct
    // }
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
