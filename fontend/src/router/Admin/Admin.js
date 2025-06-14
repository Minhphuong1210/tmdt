import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from '../../stores/auth'
const admin = [
  {
    path: "/admin",
    component: () => import("../../views/backend/AdminView.vue"),
    meta: { requiresAuth: true },
    children: [
      {
        path: "dashboard",
        name: "dashboard",
        component: () => import("../../pages/Admin/Doashboard.vue"),
      },
      {
        path: "user",
        name: "user.admin",
        component: () => import("../../pages/Admin/User.vue"),
      },
    ],
  },
  {
    path: "/auth/login",
    name: "admin.login",
    component: () => import("../../pages/Admin/Auth/Login.vue"),
    meta: { guestOnly: true }
  },
  {
    path: "/auth/register",
    name: "admin.register",
    component: () => import("../../pages/Admin/Auth/register.vue"),
    meta: { guestOnly: true }
  },
];

export default admin;
