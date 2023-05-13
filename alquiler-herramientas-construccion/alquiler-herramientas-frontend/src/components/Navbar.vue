<script setup>
import { RouterLink } from 'vue-router';
import useAuthService from '../service/AuthService';
import Dropdown from './Dropdown.vue';
import useUser from '../service/UserService';
import { onMounted, reactive } from 'vue';
import useHerramientas from '../service/HerramientaService';

const { user,  getUser } = useUser();
const { logout, errors } = useAuthService();
const { herramientas, searchHerramienta } = useHerramientas();

const searchForm = reactive({
    termino: "",
});

const search = () =>  {
    searchHerramienta(searchForm.termino);
    $parent.herramientasEncontradas = herramientas
}

onMounted(() =>{
    getUser()
});

</script>

<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- logo -->
            <RouterLink to="/" class="flex items-center">
                <img src="https://www.rentmyequipment.com/images/icons/logo_nav.png" />
            </RouterLink>

            
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input 
                    v-model="searchForm.termino"
                    type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-200 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar herramienta" required>
                    <button @click="search()"
                        class="text-white absolute right-2.5 bottom-2.5 bg-yellow-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            

            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>


            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul id="mobile-menu-2"
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">


                    <!-- cart icon -->
                    <li>
                        <RouterLink to="/carritoCompras">

                            <div class="relative py-2">

                                <div class="t-0 absolute left-3">

                                    <p
                                        class="flex h-2 w-2 items-center justify-center rounded-full bg-red-500 p-3 text-xs text-white">
                                        {{ user != null ? user.carrito : "0" }}
                                    </p>

                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="file: mt-4 h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>

                            </div>
                        </RouterLink>
                    </li>

                </ul>
            </div>

            <Dropdown placement="right">
                <!-- Button content -->
                <template v-slot:button>
                    <img class="w-10 h-10 rounded-full border-2 border-gray-600 mr-3"
                        src="https://img.icons8.com/fluency-systems-regular/48/null/user.png" alt="Saleh Mir" />

                    <span class="mr-2"> {{ user != null ? user.name : "Usuario" }} </span>

                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z" />
                    </svg>
                </template>

                <!-- Opened dropdown content -->
                <template v-if="user != null" v-slot:content>

                    <a @click="logout()" role="button"
                        class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-yellow-300 hover:text-white">Logout
                    </a>
                </template>
                <template v-else v-slot:content>
                    <RouterLink to="/iniciarSesion"
                        class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-yellow-300 hover:text-white">
                        Iniciar sesion
                    </RouterLink>
                    <RouterLink to="/registrarse"
                        class="flex w-full justify-between items-center rounded px-2 py-1 my-1 hover:bg-gray-600 hover:text-white">
                        Registrarse
                    </RouterLink>
                </template>
            </Dropdown>
        </div>
    </nav>
</template>


