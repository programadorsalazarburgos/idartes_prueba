
require('./bootstrap');
import Vue from 'vue/dist/vue'
window.Vue = require('vue').default;
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import VueSweetalert2 from "vue-sweetalert2"
Vue.use(VueSweetalert2)
import "sweetalert2/dist/sweetalert2.min.css"
import SmartTable from 'vuejs-smart-table'

Vue.use(SmartTable)

import App from './components/App.vue'
import inicio from './components/Comments/Index.vue'
import CommentsCreate from './components/Comments/Create.vue'
import CommentsEdit from './components/Comments/Edit.vue'
import indexComponent from './components/Idartes/index.vue'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: inicio,
      name: 'comments.index'
    },
    {
      path: '/comments/create/:id',
      component: CommentsCreate,
      name: 'comments.create',
    },
    {
      path: '/crear_historia/:id',
      component: CommentsEdit,
      name: 'comments.edit',
    },
    {
      path: '/index_idartes',
      component: indexComponent,
      name: 'comments.idartes',
    },
  ]
})

Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
  el: '#app',
  components: { App },
  router
});