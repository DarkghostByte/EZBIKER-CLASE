import * as VueRouter from  'vue-router'
import RegisterComponent  from '@/views/auth/RegisterComponent.vue'
import LoginComponent  from '@/views/auth/LoginComponent.vue'
import VerifyComponent  from '@/views/auth/VerifyComponent.vue'

const adminRoutes = [
    {path: 'home', component: () => import('@/views/admin/home/AdminHomeComponent.vue')},
    {path: 'users', component: () => import('@/views/admin/users/AdminUsersComponent.vue')},
    {path: 'products', component: () => import('@/views/admin/products/AdminProductsComponent.vue')},
    {path: 'checkout', component: () => import('@/views/admin/products/CheckoutComponent.vue')},
    {path: 'add', component: () => import('@/views/admin/products/AdminProductsAddComponent.vue')},
    {path: 'view', component: () => import('@/views/admin/products/ProductViewComponent.vue')},
    {path: 'view-naked', component: () => import('@/views/admin/products/ProductViewNakedComponent.vue')},


]

const routes=[
    {path:'/auth/register',name:'register',component:RegisterComponent},
    {path:'/auth/login',name:'login',component:LoginComponent},
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