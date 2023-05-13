<script setup>
import NavbarVue from './Navbar.vue';

</script>

<template>
<header>
    <NavbarVue/>
</header>

<main>
    <slot name="main"/>
</main>

</template>