<template>
  <div class="about">
    <h1>This is an about page, and the id is <span v-text="id"></span></h1>
    
  </div>
</template>
<script>
export default {
  data() {
    return {
      id: this.$route.params.id
    }
  }
}
</script>

<style>

</style>