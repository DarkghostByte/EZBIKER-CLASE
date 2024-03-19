<template>
    <div class="">
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
              <h1 class="text-4xl font-semibold mb-2">Agregar Producto</h1>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <router-link to="/admin/products" class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                    <span class="material-symbols-outlined">arrow_back</span>
                </router-link>
            </div>
            <!-- FORM -->
          
        </div>
        <div class="">
            <el-form  :label-position="'top'" style="max-width: 600px;"
             :model="form1"  :rules="rules" ref="formRef">
                
                <el-form-item prop="name" label="Nombre del producto" :label-class="'text-amber-500'">
                    <el-input v-model="form1.name" />
                </el-form-item>
                <el-form-item prop="name" label="Precio del producto" :label-class="'text-amber-500'"
                    type="number">
                    <el-input v-model="form1.price" />
                </el-form-item>
                <el-form-item prop="description" label="Descripcion del producto" :label-class="'text-amber-500'">       
                    <el-input v-model="form1.description" />
                </el-form-item>
                <el-form-item label="Categoría">
                    <el-select v-model="form1.id_categoria" placeholder="categoría">
                      <el-option label="Ollas" value="1" />
                      <el-option label="Playeras" value="2" />
                    </el-select>
                  </el-form-item>
                  <el-upload
                    class="upload-demo"
                    drag
                    :on-success="successUpload"
                    :on-error="errorUpload"
                    :action="urlApi+'products/add/upload'"
                    :auto-upload="false"
                    ref="uploadRef"
                >
                    <el-icon class="el-icon--upload"><upload-filled /></el-icon>
                    <div class="el-upload__text">
                             Drop file here or <em>click to upload</em>
                        </div>
                    <template #tip>
                    <div class="el-upload__tip">
                        jpg/png files with a size less than 500kb
                    </div>
                    </template>
                </el-upload>
                <el-form-item>
                    <el-button type="success"
                        @click="submitForm(formRef)">Guardar</el-button>
                </el-form-item>
        </el-form>
 
            <!-- END FORM -->
        </div>
    </div>
</template>
<script>
    import { ElNotification } from 'element-plus';
    import axios from 'axios'
    export default {
        name:'AdminProductsAddComponent',
        data:()=>({
           formRef:undefined,
           uploadRef:undefined,
           url:process.env.VUE_APP_ROOT_ASSETS,
           urlApi:process.env.VUE_APP_ROOT_API,
            form1:{
                name:'Olla 1',
                price: 300,
                id_category:1,
                description:'Descripcion del producto',
                img:'',
            },
            rules:{
                name:[
                    { required:true, message:'El nombre es requerido', trigger:'blur'},
                    { min:3, max: 100, message:'Longitud debería ser 3 a 100',trigger:'blur'  }
                ],
                price:[
                    { required:true, message:'El email es requerido', trigger:'blur'},
                    { type:'number', message:'El email no es valido', trigger:'blur'},
                ]
            }
            
        }),
        methods:{
            errorUpload(error){
                console.log(error)
            },
            successUpload(response){
                console.log(response)
                this.form1.img = response.filename
                axios.post('products',this.form1).then(response=>{
                    console.log(response)
                    ElNotification({
                        title:'Alerta',
                        message:'Registro insertado correctamente',
                        type:'success'
                    })
                }).catch(error=>{
                    console.log(error)
                    ElNotification({
                        title:'Error',
                        message:'Favor de llenar los campos',
                        type:'error'
                    })
                })
            },
            submitForm(){
                
                this.$refs.uploadRef.submit();
                console.log("SUBMIT")
                this.$refs.formRef.validate( (valid,fields)=>{
                    if(valid){
                        console.log(fields);
                        console.log( this.$refs.uploadRef)
                    }else{
                        ElNotification({
                            title:'Error',
                            message:'Favor de llenar los campos',
                            type:'error'
                        })
                    }
                } )
            }
        }
    }
</script>