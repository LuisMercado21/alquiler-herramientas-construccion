<script setup>

import { onMounted } from 'vue';
import useHerramientas from '../composable/Herramientas';
import Herramienta from './Herramienta.vue';

const {herramientas, getHerramientas} = useHerramientas();

onMounted(() => {
    getHerramientas();
});



</script>

<template>
    <div class="m-8">
        <div>
            <p class="mb-4 text-2xl  leading-none tracking-tight text-gray-400 dark:text-white">Herramientas</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4 p-6 border border-solid ">
            
                <herramienta v-for="herramienta in herramientas.data" :data="herramienta"/>
                
        </div>
    </div>
</template>
