import { createApp } from 'vue'
import App from './App.vue'
import './input.css'

import ElementPlus from 'element-plus'
import  'element-plus/dist/index.css'

import router from './routes/'

createApp(App)
    .use(ElementPlus)
    .use(router)
    .mount('#app')
