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
    'Subcategory1': () => import('./views/Subcategory1.vue'),
    'Subcategory2': () => import('./views/Subcategory2.vue'),
}

// функция для рекурсивного получения дочерних маршрутов
function getChildren(item) {
    let children = [];
    if (item.children !== undefined) {
        item.children.forEach(ch => {
            children.push({
                path:ch.path,
                component: imports[ch.component],
                name: ch.name,
                meta: ch.meta,
                children: getChildren(ch)
            })
        });
    }
 // console.log(children)
    return children;
}

// запись в роутер всех маршрутов
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
                inmenu: item.inmenu,
                children: getChildren(item)
            })
    }
    console.log(router.getRoutes())
}

router.beforeEach((to, from, next) => {
    store.commit('setCurrentTitle', to.meta.title)
    next()
})

export default router;

