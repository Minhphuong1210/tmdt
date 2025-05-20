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
    name:"admin.login",
    component: () => import("../../pages/Admin/Auth/Login.vue"),
  },
];

export default admin;
