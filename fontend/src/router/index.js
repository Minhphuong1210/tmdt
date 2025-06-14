import { createRouter, createWebHistory } from 'vue-router'
import admin from '../router/Admin/Admin.js'
import { useAuthStore } from '../stores/auth.js'
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    ...admin,
  ]
})
router.beforeEach((to, from, next) => {
  const auth = useAuthStore()

  // to.meta.guestOnly là route chỉ dành cho khách đã đăng nhập
  if (to.meta.guestOnly && auth.token) {
    return next('admin/dashboard')
  }
  // to.meta.requiresAuth là route yêu cầu đăng nhập
  if (to.meta.requiresAuth && !auth.token) {
    return next('/auth/login')
  }
  next()
})

export default router
