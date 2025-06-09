import { defineStore } from "pinia";
import axios from "axios";
import api from "@/axios";
export const crudBase = defineStore('crudbase', {
    state: () => ({
        data: null,

    }),
    actions: {
        async getIndex(url) {
            try {
                const response = await api.get(url)
                this.data = response.data
            } catch (error) {

            }
        },
        async store(url, id) {
            try {
                const response = await api.get(url, id)
                this.data = response.data
            } catch (error) {

            }
        },
        async update(url, data) {
            try {
                const response = await api.get(url, data)
                response.success
            } catch (error) {

            }
        },
        async edit(url, data) {
            try {
                const response = await api.get(url, data)
                response.success
            } catch (error) {

            }
        },
        async delete(url, id) {
            try {
                const response = await api.get(url, id)
                response.success
            } catch (error) {

            }
        },
        initialize() {
            const token = localStorage.getItem('token')
            if (token) {
                this.getIndex().catch(() => { })
            }
        },
    }
})