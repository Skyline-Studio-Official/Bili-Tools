import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import World from '../views/World.vue'
import Admin from '../views/Admin.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/world',
    name: 'World',
    component: World
  },
  {
    path:'/admin',
    name:'Admin',
    component:Admin
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
