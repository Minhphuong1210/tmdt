import { defineStore } from "pinia";
import api from "@/axios";
import axios from "axios";
import { baseAction } from '../crudBase/crudBase'

export const crudUser = defineStore('crudUser', {
    state: () => ({
        data: null
    }),
    actions: {
        ...baseAction, // đây là tạo kế thừa từ cha
        async getUser() {
            const user = await this.getIndex('admin/user')
            this.data = user.data
        }
    }
})