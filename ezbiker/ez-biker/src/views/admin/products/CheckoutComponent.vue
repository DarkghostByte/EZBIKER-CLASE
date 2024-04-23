<template>
    <div>
        <div class="flex">
            <!-- Columna de productos -->
            <div class="lg:w-1/2 mx-auto">
                <h2 class="text-lg">Checkout</h2>
            </div>
            <!-- Datos del usuario -->
            <div class="lg:w-1/2 mx-auto py-8">
                <el-form ref="formData" :model="form" :label-position="'top'">
 
                    <el-form-item label="Nombre:">
                        <el-input v-model="form.name"></el-input>
                    </el-form-item>
                    <el-form-item label="Apellido:">
                        <el-input v-model="form.lastname"></el-input>
                    </el-form-item>
                    <el-form-item label="Correo Electronico:">
                        <el-input v-model="form.email"></el-input>
                    </el-form-item>
                    <el-form-item label="Dirección:">
                        <el-input v-model="form.address"></el-input>
                    </el-form-item>
                    <el-form-item label="zip:">
                        <el-input v-model="form.zip"></el-input>
                    </el-form-item>
                    <el-form-item label="Estado:">
                        <el-input v-model="form.country"></el-input>
                    </el-form-item>
                    <el-form-item label="Referencia:">
                        <el-input v-model="form.reference"></el-input>
                    </el-form-item>
                    <el-form-item label="Telefono:">
                        <el-input v-model="form.phone"></el-input>
                    </el-form-item>
                    <button class="h-12 btnPaypal w-full mx-2">
                        <span class="material-symbols-outlined">Credit_card</span>
                        Paypal
                    </button>
                </el-form>
                <!--END DATOS USUARIO-->
            </div>
        </div>
    </div>
 
</template>
 
<script>
    export default {
        name:'CheckoutComponent',
        data(){
            return {
                form:{
                    name:"Alan",
                    lastname:"Madrid",
                    email:"",
                    address:"",
                    zip:"",
                    country:"",
                    state:"",
                    reference:"",
                    phone:""
                }
            }
        }
    };
</script>
 
<style>
    .btnPaypal{
        color:white;
        background-color: #0070ba;
    }
</style>