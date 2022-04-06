import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import World from '../views/World.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/world/',
    name: 'World',
    component: World
  },
  {
    path: '/world/p/:id',
    name: 'World',
    component: World
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
