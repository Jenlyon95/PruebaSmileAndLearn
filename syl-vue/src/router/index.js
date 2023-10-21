import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import DreamersNew from '../views/DreamersNew.vue'
import DreamersEdit from '../views/DreamersEdit.vue'
import DreamersView from '../views/DreamersView.vue'
import GruposView from '../views/GruposView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/About',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/createD',
    name: 'createD',
    component: DreamersNew
  },
  {
    path: '/editD/:id',
    name: 'editD',
    component: DreamersEdit
  },
  {
    path: '/viewD',
    name: 'viewD',
    component: DreamersView
  },
  {
    path: '/gruposView',
    name: 'viewG',
    component: GruposView
  },
  
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
