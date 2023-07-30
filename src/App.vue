<script setup lang="ts">
  import { RouterLink, RouterView } from 'vue-router'
  import HeaderView from './components/Header.vue'
  import FooterView from './components/Footer.vue'
</script>

<template>
  <main class="md:container md:mx-auto my-5">
    <HeaderView />

    <RouterView />

    <FooterView />
  </main>
</template>
