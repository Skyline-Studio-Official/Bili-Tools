import { createApp } from 'vue';
import App from './App';
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
// import ElementPlus from 'element-plus'
// import 'element-plus/dist/index.css'
import router from './router'


const app = createApp(App).use(router);


app.use(Antd).mount('#app');