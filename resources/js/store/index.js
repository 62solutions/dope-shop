import { createStore } from "vuex";
import modules from './modules'
import axios from "axios";
window.axios  = axios;

const store = createStore({
    state: {
        main_loaded: true,
        error: null,
        success: null,
        info: null,
        routes: [],
        breadcrumbs: {},
        current_title: '',
        defaultActiveMenuItem: '',
    },

    mutations: {
        setRoutes(state, value) {
            state.routes = value;
        },

        setError(state, value) {
            state.error = value;
        },

        setCurrentTitle(state, value) {
            state.current_title = value;
        },

        setDefaultActiveMenuItem(state, value) {
            state.defaultActiveMenuItem = value;
        }


    },

    getters: {
        routes: s => s.routes||[],
    },

    actions: {
        getRoutes: async ({commit})=>{
            try {
                const res = await axios.get('/routes')
                commit('setRoutes',res.data)

            } catch (e) {
                commit('setError',e)
                throw (e)
            }
        },
    },

    modules

})

export default store

