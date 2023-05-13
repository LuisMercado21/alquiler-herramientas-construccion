<script setup>
import useCarrito from '../service/CarritoService';

const {errors, deleteItemCarrito} = useCarrito();

const props = defineProps({
	data: Object,
});

function formatoDinero(numero) {
	return new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'COP' }).format(numero);
}

</script>

<template>
	<div class="flex justify-between items-center pt-6 mt-6 border-t">

		<div class="flex  items-center">

			<img :src="data.fotos[0].src" width="60" class="rounded-full ">

			<div class="flex flex-col ml-3 ">
				<span class="text-md font-medium w-auto">{{ data.nombre }}</span>
				<span class="text-xs font-light text-gray-400">ID: {{ data.herramienta_id }}</span>

			</div>


		</div>

		<div class="flex justify-center items-center">

			<div class="pr-8 flex">
				<span class="font-semibold">-</span>
				<input type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2"
					value="1">
				<span class="font-semibold">+</span>
			</div>

			<div class="pr-8">

				<span class="text-xs font-medium">{{ formatoDinero(data.precio) }}</span>
			</div>
			<div>
				<i class="fa fa-close text-xs font-medium"></i>
			</div>

		</div>
		<button 
			@click="deleteItemCarrito(data.pedido_id)"
			type="button"
			class=" -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700"
			data-dismiss-target="#alert-4" aria-label="Close">
			<span class="sr-only">Close</span>
			<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
				xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd"
					d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
					clip-rule="evenodd"></path>
		</svg>
	</button>

</div></template>