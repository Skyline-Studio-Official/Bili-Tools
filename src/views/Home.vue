<template>
  <div class="home">
    <a-carousel :after-change="onChange" autochange arrows>
      <div v-for="(item,i) in star_source" :key="i">
        <div class="img" v-bind:style="{backgroundImage: 'url(' + item.img +')'}">
          <a :href="item.link"><span class="title">{{item.name}}</span></a>
        </div>
      </div>
    </a-carousel>

    <div class="Stars">
      <a-divider orientation="left">Left Text</a-divider>
      <a v-for="(item,i) in source_data" :key="i" :href="item.link">
        <a-card hoverable style="width: 280px;margin:5px;border-radius:8px;">
          <a-card-meta :title="item.name" :description="item.description"></a-card-meta>
          <img
            alt="example"
            style="height:100%;width:100%;margin-top:12px;background-size:cover;"
            src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
          />
        </a-card>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  setup (){
    const onChange = current => {
      console.log(current);
    };
    return {
      onChange
    }
  },
  mounted () {
    this.checkConn_Fetch()
  },
  data() {
    return {
      source_data: [
        {"name": "这是一个测试代码1","link":"/world/p/1","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码2","link":"/world/p/2","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码3","link":"/world/p/3","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码4","link":"/world/p/4","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码5","link":"/world/p/5","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码5","link":"/world/p/6","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码1","link":"/world/p/7","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码2","link":"/world/p/8","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码3","link":"/world/p/9","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码4","link":"/world/p/10","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码5","link":"/world/p/11","description":"这是一串描述这是一串描述这是一串描述"},
        {"name": "这是一个测试代码5","link":"/world/p/12","description":"这是一串描述这是一串描述这是一串描述"},
      ],

      star_source: [
        {"name": "这是一个测试代码1","link":"/world/1","img":"https://t8.baidu.com/it/u=3091762941,2208638369&fm=167&app=3000&size=w560&q=100&n=0&f=PNG&fmt=auto?sec=1649350800&t=7c10960ae24fa14d1da95d152da2f0f4"},
        {"name": "这是一个测试代码2","link":"/world/1","img":"https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"},
        {"name": "这是一个测试代码1","link":"/world/1","img":"https://t8.baidu.com/it/u=3091762941,2208638369&fm=167&app=3000&size=w560&q=100&n=0&f=PNG&fmt=auto?sec=1649350800&t=7c10960ae24fa14d1da95d152da2f0f4"},
        {"name": "这是一个测试代码2","link":"/world/1","img":"https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"},
      ],

      temp_code: 0, // 验证连接状态码
      temp_msg:0, // 验证连接状态信息
    }
  },
  methods: {

    checkConn(){
      /*
      * Author: Lanbin
      * Action: 检查与后端的连接，主函数
      * Time：2022-4-5 21:13:49
      * */
      if(this.temp_code == 20000){
        this.success("恭喜！后端连接成功，您可以畅玩啦！")
      } else {
        this.error("抱歉，后端连接失败，请检查您的网络连接")
      }
    },

    checkConn_Fetch(){
      /*
      * Author: Lanbin
      * Action: 检查与后端的连接，调用函数
      * Time：2022-4-5 21:13:49
      * */
      fetch('http://localhost:8866/demo.php').then(res => {
        return res.json()
      }).then(res => {
        console.log(res)
        this.temp_code = res.code;
        this.temp_msg = res.msg;
        
      }).catch(function (error) { // 请求失败处理
        this.error("出错啦！请检查Fetch后端代码！")
        error;
      })
      setTimeout(this.checkConn, 500)
    },

    success(data) {
      /*
      * Author: Lanbin
      * Action: 封装函数，成功提示窗 data -> 显示数据
      * Time：2022-4-5 21:13:49
      * */
      this.$message.success(data);
    },

    error(data) {
      /*
      * Author: Lanbin
      * Action: 封装函数，失败提示窗 data -> 显示数据
      * Time：2022-4-5 21:13:49
      * */
      this.$message.error(data);
    }
  }
}
</script>

<style>
a {
  color: #fff;
}
a:hover {
  /* text-decoration-line: underline; */
  color: rgba(255, 255, 255, 0.887);
}
</style>

<style scoped>
/* For demo */
.ant-carousel :deep(.slick-slide) {
  height: 300px;
  text-align: center;
  line-height: 300px;
  background: #364d79;
  overflow: hidden;
}

.ant-carousel :deep(.slick-slide h3) {
  color: #fff;
}

.ant-carousel {
  height: 300px;
  max-width: 94%;
  min-width: 90%;
  margin: 5px;
}
.ant-carousel {
  color: #fff;
  font-size: x-large;
}

.ant-carousel .img {
  background: no-repeat;
  background-size: cover;
}

.ant-carousel .img .cov {
  background-color: black;
  opacity: 0.2;
  position: fixed;
  z-index: 0;
  width: 100%;
  height: 100%;
}
.ant-carousel .img .cov a{
  opacity: 1;
}
.ant-carousel .title {
  text-align: center;
}

.Stars {
  justify-content: center;
  display: flex;
  flex-wrap: wrap;
}
</style>