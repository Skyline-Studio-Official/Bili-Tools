<template>
  <div class="home">
    <a-button type="primary">Welcome</a-button>
  </div>
</template>

<script>
export default {
  mounted () {
    fetch('http://localhost:8866/demo.php').then(res => {
        return res.json()
    }).then(res => {
        console.log(res)
    }).catch(function (error) { // 请求失败处理
        console.log(error);
    });
  },
  methods: {
    info() {
      this.$message.info('This is a normal message');
    }
  }
}
</script>

<style>

</style>