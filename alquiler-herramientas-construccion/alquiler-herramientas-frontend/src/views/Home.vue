<script setup>
  import catalogo from '../components/Catalogo.vue';
  import Layaout from '../components/Layaout.vue';
</script>

<template>
  <Layaout>
    <template v-slot:main>
      <catalogo />
    </template>
  </Layaout>
</template>
