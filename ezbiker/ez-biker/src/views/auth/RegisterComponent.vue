<template>
    <div>
        <el-form :model="form1"> 

            <el-form-item label="name">
                <el-input v-model="form1.name" />
            </el-form-item>

            <el-form-item label="email">
                <el-input v-model="form1.email" 
                type="Email"
                />
            </el-form-item>

            <el-form-item label="password">
                <el-input v-model="form1.password" 
                type="password"
                placeholder="Please input password"
                show-password
                />
            </el-form-item>

            <el-form-item>
                <el-button type="primary" @click="onSubmit">Iniciar</el-button>
                <el-button type="danger">Salir</el-button>
            </el-form-item>
            
        </el-form>
    </div>
</template>

<script>
import { reactive } from "vue"
    export default{
        name:'RegisterComponent',
        data:()=>({
                form1:reactive({
                    name:"Jesus Chavez",
                    email:"jtest@gmail.com",
                    password:"123",
                    password2:"123"
                })
            })
        }
</script>