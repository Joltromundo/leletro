<script setup lang="ts">
  import FormView from '../../components/appliance/Form.vue'
</script>

<template>
  <div class="update m-7">
    <h1>This is an CREATE {{ this.$route.params.id }} page</h1>

    <FormView />
  </div>
</template>
