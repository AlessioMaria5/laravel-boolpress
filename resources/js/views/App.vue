<template>
  <div>
      <HeaderComponent />
      <HomeComponent />
      
  </div>
</template>

<script>
import HeaderComponent from '../components/partials/HeaderComponent.vue';
import HomeComponent from '../components/HomeComponent.vue';
export default {
    name: "App",
    components: { HeaderComponent, HomeComponent }

}
</script>

<style>

</style>