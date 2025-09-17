import { createRouter, createWebHistory } from 'vue-router'
import Home from '@/views/Home.vue'

const routes = [
  { path: '/', redirect: '/manifest' },
  { path: '/:section', component: Home }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to) {
    if (to.params.section) {
      return {
        el: `#${to.params.section}`,
        behavior: 'smooth'
      }
    }
    return { top: 0 }
  }
})

export default router