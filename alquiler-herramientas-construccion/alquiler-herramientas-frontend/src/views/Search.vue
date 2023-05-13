<script setup>
  import catalogoSearch from '../components/CatalogoSearch.vue';
  import { ref } from 'vue';
  import NavbarVue from '../components/Navbar.vue';

  const herramientasEncontradas = ref([]);

</script>

<template>
  <header>
    <NavbarVue/>
</header>
  <main>
      <catalogoSearch :herramientas="herramientasEncontradas"/>
  </main>


</template>
