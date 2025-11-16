import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue'

const routes = [
  { path: '/', redirect: '/manifest' },
  { path: '/:section', component: Home }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
    scrollBehavior() {
    return false
  }
})

export default router
