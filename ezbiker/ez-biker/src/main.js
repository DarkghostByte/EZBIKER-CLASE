import { createApp } from 'vue'
import App from './App.vue'
import './input.css'
import axios from  "axios";
import ElementPlus from 'element-plus'
import  'element-plus/dist/index.css'
axios.defaults.baseURL = process.env.VUE_APP_ROOT_API

import router from './routes/'

createApp(App)
    .use(ElementPlus)
    .use(router)
    .mount('#app')
