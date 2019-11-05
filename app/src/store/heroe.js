import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios'

Vue.use(Vuex);

export default new Vuex.Store({
    name: "hero",
    namespaced: true,
    state: {
        heroes: [],
        heroe: {},
    },

    getters:{

    },

    mutations: {
        SET_HEROES(state, heroes) {
            state.heroes = heroes;
        },
        SET_HEROE(state, heroe) {
            state.heroe = heroe;
        }
    },
    actions: {
        getAll: async (context) => {
            let {data} = await Axios.get(`${this.APIHOST }/heroes`);
            context.commit('SET_HEROES', data)
        },
        getById: async (context, payload) => {
            console.log(payload)
            let {data} = await Axios.get(`${this.APIHOST }/heroes/${payload}`);
            context.commit('SET_HEROE', data)
        },
    },
})
