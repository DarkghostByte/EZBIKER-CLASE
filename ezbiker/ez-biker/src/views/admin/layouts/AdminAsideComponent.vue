<template>
    <aside class="hidden sm:flex sm:flex-col">
        <a class="inline-flex items-center justify-center h-20 w-40 hover:bg-purple-500 focus:bg-purple-500" style="background-color:#212122;">
          <img v-bind:src="url+'img/logo.jpeg'" class="" style="width: 100%; height: 70%; ">       
        </a>
        <div  class="flex-grow flex flex-col justify-between text-gray-900 bg-orange-600" style="background-color:#212122;">
          <nav class="flex flex-col mx-4 my-6 space-y-4 ">

            <router-link to="/admin/home" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Home</span>
              <span class="material-symbols-outlined logoId ">home</span>
              <p id="HTxt" class="px-2 letraId">Inicio</p>
            </router-link>

            <router-link to="/admin/view" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Clientes</span>
              <span class="material-symbols-outlined logoId">motorcycle</span>
              <p id="HTxt" class="px-2 letraId">Productos</p>
            </router-link>

            <router-link to="/admin/works" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Ordenes de trabajo</span>
              <span class="material-symbols-outlined">bug_report</span>
              <p id="HTxt" class="px-2">Ordenes</p>
            </router-link>
            <router-link to="/admin/calendar" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Agenda</span>
              <span class="material-symbols-outlined">calendar_clock</span>
              <p id="HTxt" class="px-2">Agenda</p>
            </router-link>
            <router-link to="/admin/certificate" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Certificados</span>
              <span class="material-symbols-outlined">verified</span>
              <p id="HTxt" class="px-2">Certificados</p>
            </router-link>
            <router-link to="/admin/certificate" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Certificados</span>
              <span class="material-symbols-outlined">verified</span>
              <p id="HTxt" class="px-2">Certificados</p>
            </router-link>
            <router-link to="/admin/certificate" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Certificados</span>
              <span class="material-symbols-outlined">verified</span>
              <p id="HTxt" class="px-2">Certificados</p>
            </router-link>
            <router-link to="/admin/certificate" class="inline-flex items-center justify-center py-3 hover:text-gray-200 hover:bg-blue-700 focus:text-gray-400 focus:bg-blue-900 rounded-3xl">
              <span class="sr-only">Certificados</span>
              <span class="material-symbols-outlined">verified</span>
              <p id="HTxt" class="px-2">Certificados</p>
            </router-link>
          </nav>
        </div>
      </aside>
    </template>
    
    
    <style>

    .logoId{
    color:rgb(201 75 14);
    }

    .letraId{
      color:rgb(255, 255, 255);
      }
    
    </style>
    
    
    <script>
    export default{
        name:'AdminAsideComponent',
        data:()=>({
            url:process.env.VUE_APP_ROOT_ASSETS,
        }),
    }
    </script>