<script setup>

import useCarrito from '../service/CarritoService';
import useUser from '../service/UserService';

const { user, getUser } = useUser();
const { message, addItemCarrito } = useCarrito();


const props = defineProps({
    data: Object,
});

function formatoDinero(numero){
    return new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'COP' }).format(numero);
}
</script>

<template>

<div class="w-80 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

<div v-if=message.data id="alert-4" class="flex p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium">
    Producto agregado
  </div>
</div>



    <a href="#">
        
        <img v-if="data.fotos[0] != null" class="p-8 rounded-t-lg" :src="data.fotos[0].src" />
        <img v-else class="p-8 rounded-t-lg" src="https://www.shutterstock.com/image-vector/no-camera-icon-vector-sign-600w-1546912886.jpg" />

    </a>

    <div class="px-5 pb-5">
        
        <a href="#">
            <h5 class="w-64 whitespace-nowrap overflow-hidden text-ellipsis text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                {{ data.nombre }}
            </h5>
        </a>

        <p class="w-64 whitespace-nowrap overflow-hidden text-ellipsis trucante mb-3 text-gray-500 dark:text-gray-400">
            {{ data.descripcion }}
        </p>
    
        <div class="flex items-center justify-between">
            <span class="   text-sm  text-gray-900 dark:text-white">
                {{ formatoDinero(data.precio) }}
            </span>
            <a role="button" @click="addItemCarrito(data.id)" 
            class="text-white bg-yellow-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Agregar al Carrito
            </a>
        </div>

    </div>

</div>

</template>

