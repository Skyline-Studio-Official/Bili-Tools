<template>
  <div class="home">
    <a-button type="primary" @click="checkConn">Welcome</a-button>
  </div>
</template>

<script>
export default {
  mounted () {
    this.checkConn()
  },
  data() {
    return {
      temp_code: 0, // 验证连接状态码
      temp_msg:0, // 验证连接状态信息
    }
  },
  methods: {
    checkConn(){
      fetch('http://localhost:8866/demo.php').then(res => {
          return res.json()
      }).then(res => {
          console.log(res)
          console.log(this.temp_code)
          this.temp_code = res.code;
          console.log(this.temp_code)
          this.temp_msg = res.msg;
          console.log(this.temp_code)
          
      }).catch(function (error) { // 请求失败处理
          console.log(error);
      })
      if(this.temp_code == 20000){
        this.success("恭喜！后端连接成功，您可以畅玩啦！")
      } else {
        this.error("抱歉，后端连接失败，请检查您的网络连接")
      }
    },
    success(data) {
      this.$message.success(data);
    },
    error(data) {
      this.$message.error(data);
    }
  }
}
</script>

<style>

</style>