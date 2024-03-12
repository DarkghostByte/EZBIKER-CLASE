import * as VueRouter from  'vue-router'
import RegisterComponent  from '@/views/auth/RegisterComponent.vue'
import VerifyComponent  from '@/views/auth/VerifyComponent.vue'

const adminRoutes = [
    {path: 'home', component: () => import('@/views/admin/home/AdminHomeComponent.vue')},
    {path: 'users', component: () => import('@/views/admin/users/AdminUsersComponent.vue')},
    {path: 'products', component: () => import('@/views/admin/products/AdminProductsComponent.vue')},

]

const routes=[
    {path:'/auth/register',name:'register',component:RegisterComponent},
    {path:'/auth/verify',name:'verify',component:VerifyComponent},

    {path:'/admin',name:'admin-home',
    component: import('@/views/admin/layouts/AdminLayoutComponent.vue'),
    children: adminRoutes
    },

]

const router = VueRouter.createRouter({
    history:VueRouter.createWebHistory(),
    routes
})

export  default router