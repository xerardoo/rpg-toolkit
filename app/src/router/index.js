import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import Hero from '../views/Hero.vue'
import Monster from '../views/Monster.vue'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            meta: {title: "Dashboard"},
            path: '/',
            name: 'dashboard',
            component: Dashboard
        }, {
            meta: {title: "Heroes"},
            path: '/heroes',
            name: 'heroes',
            component: Hero
        }, {
            meta: {title: "Monsters"},
            path: '/monsters',
            name: 'monsters',
            component: Monster
        }
    ]
});

export default router
