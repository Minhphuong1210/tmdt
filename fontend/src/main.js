import './assets/main.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap/dist/js/bootstrap.min.js'
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import axios from 'axios'
import App from './App.vue'
import router from './router'
import { useAuthStore } from './stores/auth'

const app = createApp(App)
// cái này để giữ đăng nhập khi F5

app.use(createPinia())
const auth = useAuthStore()
auth.initialize()
app.use(router)



app.mount('#app')
