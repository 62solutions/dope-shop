import './bootstrap';
import { createApp } from 'vue';
// глобальный импорт библиотеки
// import ElementPlus from 'element-plus'
// import 'element-plus/dist/index.css'

import App from './components/App.vue'
import store  from "./store"
import router from "./router"
const app = createApp(App);
app.use(store)
app.use(router)
// использование библиотеки глобально
// app.use(ElementPlus)

app.mount('#app')
