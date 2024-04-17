<template>
    <div>
        <!--
      <div class="flex justify-center items-center h-screen bg-gray-900">
            <div class="w-1/3">
                <div class="flex">
                    <img v-bind:src="url+'img/logo.jpeg'" class="w-50 h-20 animate-bounce">
                    <h1 class="text-center text-4xl py-4 text-yellow-700">SignIn EzBiker</h1>

                </div>
                
                <el-form 
                :label-position="'top'" 
                style="max-width: 100%;"
                :model="form1"
                :rules="rules"
                ref="formRef"
                > 

                <el-form-item label="Nombre" prop="name">
                    <el-input v-model="form1.name" 
                    placeholder="Insenta tu nombre"
                    />
                </el-form-item>
    
                <el-form-item label="Correo electronico" prop="email">
                    <el-input v-model="form1.email" 
                    type="Email"
                    placeholder="Insenta tu correo"
                    />
                </el-form-item>
    
                <el-form-item label="Contraseña" prop="password">
                    <el-input v-model="form1.password" 
                    type="password"
                    placeholder="Insenta tu contraseña"
                    show-password
                    />
                </el-form-item>
                
                <el-form-item>
                    <el-button type="success" @click="submitForm(formRef)">Iniciar</el-button>
                </el-form-item>

                </el-form>
            </div>
            
        </div>
        -->
  

    </div>
</template>

<script>
//import axios from  'axios';
    export default{
        name:'VerifyComponent'
        }
</script>