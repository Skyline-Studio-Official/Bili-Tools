<template>
  <div class="home">
    <a-button type="primary" @click="info">Welcome</a-button>
  </div>
</template>

<script>
// export default {name: 'App',components: {}}
import { message } from 'ant-design-vue';
import { defineComponent } from 'vue';
export default defineComponent({
  setup() {
    const info = () => {
      message.info('Hello, Welcome to Coding-Tools');
    };
    return {
      info,
    };
  },
});
</script>

<style>
.home {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}
</style>