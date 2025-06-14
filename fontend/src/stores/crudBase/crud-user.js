import { defineStore } from "pinia";
import api from "@/axios";
import axios from "axios";
import { crudBaseAdmin } from '../crudBase/crudBaseAdmin'

export const crudUser = defineStore('crudUser', {
    state: () => ({
        data: null
    }),
    actions: {
        ...crudBaseAdmin, // đây là tạo kế thừa từ cha
        async getUser() {
            const user = await this.getIndex('admin/user')
            // console.log(user);

            this.data = user.data
        }
    }
})