import { createWebHistory, createRouter } from 'vue-router';

const Dashboard = () => import('@/views/home/index.vue')

const routes = [
    {
        path: "/",
        component: Dashboard,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes, // short for `routes: routes`
});


export default router;