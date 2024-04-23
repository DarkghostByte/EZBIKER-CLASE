<template>
    <div>

        <div class="flex justify-center items-center h-screen bg-gray-200">
            <div class="w-1/2">
                <div class="flex h-screen justify-center items-center rounded-l-3xl" style="background-color: rgb(33 33 33);">
                    <img v-bind:src="url+'img/logo.jpeg'" 
                    class="" 
                    style="width: 70%; height: 25%; ">              
                </div>   
            </div>
            <div class="flex h-screen justify-center items-center rounded-r-3xl" style="background-color: rgb(25 25 25); width: 30%; ">
                
                <el-form 
                :label-position="'top'" 
                style="max-width: 100%; "
                :model="form1"
                :rules="rules"
                ref="formRef"
                > 

                <div class="flex justify-center text-gray-200 font-mono">
                    <h1 style="font-size: 60px; ">Welcome</h1>
                </div>
                <div class="flex justify-center items-center text-gray-200 font-mono">
                    <h2 style="font-size: 20px; ">Login in to your account to continue</h2>
                </div>

                <br>

                <el-form-item label="Name" prop="name">
                    <el-input v-model="form1.name" 
                    placeholder="Insenta tu nombre"
                    />
                </el-form-item>
    
                <el-form-item label="Password" prop="password" >
                    <el-input v-model="form1.password" 
                    type="password"
                    placeholder="Insenta tu contraseña"
                    show-password
                    />
                </el-form-item>
                <div class="flex justify-center items-center">

                    <el-form-item>
                        <router-link to="/admin/home">
                            <el-button style="background-color: #c94b0e;" type="info" @click="submitForm(formRef)" round>Iniciar</el-button>
                        </router-link>
                        
                    </el-form-item>

                </div>

                <div class="flex justify-center items-center font-mono" style="text-align: center;">

                    <el-form-item>
                        <p style="font-size:20px; color: rgb(229 231 235);">¿Aun no tienes una cuenta...? 
                            <router-link to="register">
                                <p style="color: #c94b0e; font-size:15px;">Haz clic aqui para crearla</p>
                            </router-link>
                        </p> 
                        
                        
                    </el-form-item>
                    

                </div>

                

                </el-form>
            </div>
        </div>


    </div>
</template>

<script>
import axios from  'axios';
import { ElNotification } from "element-plus";
import { reactive } from "vue"

    export default{
        methods: {
                    submitForm(){
                        console.log(this.form1)
                        this.$refs.formRef.validate((valid,fields)=>{
                            if(valid){
                                console.log(fields)
                                axios.get(process.env.VUE_APP_ROOT_API+'users',this.form1).then(response=>{
                                    console.log(response)
                                    if(response.data.status == 'success'){
                                        ElNotification({
                                            title:"Exito",
                                            message:'Sesion Iniciada',
                                            type: 'success'
                                        })
                                    }else{
                                        ElNotification({
                                            title:'Error',
                                            message: 'Ha ocurrido un error',
                                            type: 'error'
                                        })
                                    }
                                }).catch(error=>{
                            console.log(error)
                            ElNotification({
                                title: 'Error',
                                message: 'Ha ocurrido un error',
                                type:  'error'
                            })
                        })
                    }else{
                        ElNotification({
                            title:'ERROR',
                            message:'Favor de llenar los campos',
                            type:'error'
                        })
                    }
                })
            }
        },
        name:'LoginComponent',
        data:()=>({
            dialogVisible: false,
            formRef: undefined,
            url:process.env.VUE_APP_ROOT_ASSETS,
                form1:reactive({
                    name:"Jesus Chavez",
                    password:"123",
                    password2:"123",
                    licence:[]
                
                }),
                rules:{
                    name:[
                        {required:true, message:'El nombre es requerido', trigger:'blur'},
                        { min:3, max:100, message:'La longitud deberia ser de 3 a 100', trigger:'blur' }
                    ],
                    password:[
                        {required:true, message:'La contraseña es requerida', trigger:'blur'}
                    ]
                }
                    
                    
            })
        }
</script>