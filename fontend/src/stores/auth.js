import { defineStore } from "pinia";
import api from "@/axios";
import axios from "axios";

export const useAuthStore = defineStore('auth', {
    state: () => ({
        token: localStorage.getItem('token') || null,
        user: null,
    }),
    getters: {
        isAuthenticated: (state) => !!state.token,
    },
    actions: {
        // đăng nhập
        async login(data) {
            try {
                const response = await api.post("/auth/login", data)
                const token = response.data.token

                this.token = token
                localStorage.setItem('token', token)

                axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
                console.log(response);

                // await this.getUser()
            } catch (error) {
                throw error
            }
        },

        //đăng ký
        async register(data) {
            try {
                const response = await api.post('/auth/register', data)
            } catch (error) {
                throw error
            }
        },

        // lấy thông tin user
        async getUser() {
            try {
                const response = await api.post('/user')
                this.user = response.data
            } catch (error) {
                this.logout()
                throw error
            }
        },

        //đăng xuất
        async logout() {
            try {
                await api.post('logout')
            } catch (error) {
                throw error
            }
            this.token = null
            this.user = null

            delete axios.defaults.headers.common['Authorization']
        },

        // hàm này chạy khi load lại trang để lưu lại các giá trị cũ
        initialize() {
            const token = localStorage.getItem('token')
            if (token) {
                this.token = token
                axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
                this.getUser().catch(() => { })
            }
        },
    }
})