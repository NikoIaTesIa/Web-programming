import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/home'

import header from '@/components/header'
import main from '@/components/main'
import product_item from "@/components/product-item"
import login from "../components/login"
import product from "@/components/product"
import footer from '@/components/footer'

Vue.component('app-header', header)
Vue.component('app-main', main)
Vue.component('app-product-item', product_item)
Vue.component('app-login', login)
Vue.component('app-product', product)
Vue.component('app-footer', footer)

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Home',
        components: {
            default: Home
        },
        meta: {
            requiredAuth: true
        }
    },
    {
        path: '/login',
        name: 'login',
        components: {
            default: login
        },
    },
    {
        path: '/product/:id',
        name: 'product',
        components: {
            default: product
        }
    },
    {
        path: '/product_item',
        name: 'product_item',
        components: {
            default: product_item
        }
    },
    {
        path: '/main',
        name: 'main',
        components: {
            default: main
        }
    }

]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router