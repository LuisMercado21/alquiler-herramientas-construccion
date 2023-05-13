<script setup>

import Herramienta from './Herramienta.vue';

const props = defineProps({
    herramientas: Object
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
