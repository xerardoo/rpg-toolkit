import Vue from 'vue'
import Vuex from 'vuex'
import hero from './heroe'

Vue.use(Vuex);

export default new Vuex.Store({
    namespaced: true,
    modules: {
        'hero': hero,
    }
})
