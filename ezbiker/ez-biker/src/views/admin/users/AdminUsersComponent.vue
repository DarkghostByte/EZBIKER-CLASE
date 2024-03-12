<template>
    <div>
        <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
            <div class="mr-6">
              <h1 class="text-4xl font-semibold mb-2">Usuarios</h1>
            </div>
            <div class="flex flex-wrap items-start justify-end -mb-3">
                <button class="inline-flex px-5 py-3 text-white bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 rounded-md ml-6 mb-3">
                    Add User
                  </button>
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
                <el-table-column prop="img" label="Imagen"  />
                <el-table-column prop="name" label="Nombre"  sortable />
                <el-table-column prop="email" label="Correo" />
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
      import axios from  'axios'
      export default {
          name:'AdminHomeComponent',
          
          data:()=>({
                tableData:[],
          }),
          mounted(){
            this.tableData = [{
                    date: '2016-05-03',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-02',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-04',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
                {
                    date: '2016-05-01',
                    name: 'Tom',
                    address: 'No. 189, Grove St, Los Angeles',
                },
            ]
            axios.get('users').then(res=>{
              this.tableData=res.data.data
            })
          },
          methods:{
            handleEdit(){},
            handleDelete(){},
          }
      }
  </script>