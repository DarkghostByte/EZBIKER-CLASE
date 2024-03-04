import * as VueRouter from  'vue-router'
import RegisterComponent  from '@/views/auth/RegisterComponent.vue';

const routes=[
    {path:'/auth/register',name:'register',component:RegisterComponent}
]

const router = VueRouter.createRouter({
    history:VueRouter.createWebHistory(),
    routes
})

export  default router