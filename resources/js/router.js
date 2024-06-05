import { createRouter, createWebHashHistory } from "vue-router";
import store  from "./store";


const router = new createRouter({
    history: createWebHashHistory(),
    routes: []
});

const imports = {

    'Welcome': () => import('./views/Welcome.vue'),
    'Stores': () => import('./views/Stores.vue'),
    'Categories': () => import('./views/Categories.vue'),
}

await store.dispatch('getRoutes');
let raw = store.getters['routes'];

for (const i in raw){
    let item = raw[i];
    if (item.name) {
        router.addRoute({
            path: item.path,
            name: item.name,
            meta: item.meta,
            props: item.props,
            component: imports[item.component],
            inmenu: item.inmenu
        })
    }
}

export default router;

