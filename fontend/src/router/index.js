import { createRouter, createWebHistory } from 'vue-router'
import admin from '../router/Admin/Admin.js'
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    ...admin,
  ]
})

export default router
