import { createRouter, createWebHistory } from "vue-router";
const admin = [
  {
    path: "/admin",
    component: () => import("../../views/backend/AdminView.vue"),



    children: [
      {
        path: "dashboard",
        name: "dashboard",
        component: () => import("../../pages/Admin/Doashboard.vue"),
      },

    ],
  },
  {
    path: "/auth/login",
    name: "admin.login",
    component: () => import("../../pages/Admin/Auth/Login.vue"),
  },
  {
    path: "/auth/register",
    name: "admin.register",
    component: () => import("../../pages/Admin/Auth/register.vue"),
  },
];

export default admin;
