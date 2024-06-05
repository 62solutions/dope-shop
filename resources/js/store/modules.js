//import store from './modules/store';

const modules = {

};

Object.keys(modules).forEach(name => {
    modules[name] = { ...modules[name], namespaced: true };
});

export default modules;
