<template>
    <div>
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
              <h1 class="text-4xl font-semibold mb-2">Productos</h1>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <router-link to="/admin/add" class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                    Add Product
                  </router-link>
            </div>
        </div>
        <!-- TABLE DATA -->
        <div class="flex">
            <el-table
                :data="tableData"
                :default-sort="{ prop: 'name', order: 'descending' }"
                style="width: 100%"
            >
                <el-table-column prop="id" label="Id" sortable width="180"  />
                <el-table-column width="50px">
                    <template #default="scope">
                        <img v-bind:src="url+'products/'+scope.row.img" class="w-10">
                    </template>
                </el-table-column>
                <el-table-column prop="name" label="Nombre"  sortable />
                <el-table-column prop="price" label="Precio" sortable  />
                <el-table-column prop="id_category" label="Categoria" sortable  />
                <el-table-column label="">
                    <template #default>
                      <el-button size="small" @click="handleEdit()">Edit</el-button>
                      <el-button
                        size="small"
                        type="danger"
                        @click="handleDelete()"
                        >Delete</el-button
                      >
                    </template>
                  </el-table-column>
            </el-table>
        </div>
        <!-- END TABLE DATA -->
    </div>
  
  </template>
  
  <script>
      import axios from 'axios';
      export default {
          name:'AdminProductsComponent',
          
          data:()=>({
                tableData:[],
                url:process.env.VUE_APP_ROOT_ASSETS,
          }),
          mounted(){
            this.tableData = []
            axios.get('products').then(res=>{
              this.tableData=res.data.data
            })
          },
          methods:{
            handleEdit(){},
            handleDelete(){},
          }
      }
  </script>