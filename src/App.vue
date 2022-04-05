<template>
  <a-layout style="height:100vh">
    <a-layout-header style="color:white">
      这是脑袋
    </a-layout-header>
    <a-layout>
      <a-layout-sider style="color:white">
        这是侧边栏
      </a-layout-sider>
      <a-layout-content>
        <!-- Router View会渲染此时页面的路由 -->
        <router-view></router-view>
      </a-layout-content>
    </a-layout>
    <a-layout-footer>Coding Tools &copy; Skyline Studio 天际工作室 | 2022</a-layout-footer>
  </a-layout>
</template>

<script>

</script>

<style>

</style>