import axios from  'axios';
const instance =axios.create({
    baseUrl:process.env.VUE_APP_API_BASE_URL
})

export default instance;