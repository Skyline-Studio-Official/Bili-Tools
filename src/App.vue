<template>
  <a-layout style="height:100%">
    <a-layout-header style="color:white">
      这是Header
      <!-- Router-Link = <a> 但是这是针对路由的 -->
      <div style="" class="nav">
        <div class="nav-item"><router-link to="/" >主页</router-link></div>
        <div class="nav-item"><router-link to="/world" >世界</router-link></div>
        <div class="nav-item"><router-link to="/admin" >后台</router-link></div>
      </div>
    </a-layout-header>
    <a-layout>
      <!-- <a-layout-sider style="color:white">
        这是侧边栏
      </a-layout-sider> -->
      <a-layout-content>
        <!-- Router View会渲染此时页面的路由 -->
        <!-- 渲染的东西会放在Router-View标签里 -->
        <router-view></router-view>
      </a-layout-content>
    </a-layout>
    <a-layout-footer>Coding Tools &copy; Skyline Studio 天际工作室 | 2022</a-layout-footer>
  </a-layout>
</template>

<script>

</script>

<style #scope>
.nav {
  display: inline-block;
  margin-left:60px;
}
.nav-item {
  display: inline-block;
  margin-left: 40px;
  color:white;
}
router-link {
  color: white;
}
</style>