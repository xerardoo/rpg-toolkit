import Vue from 'vue'
// import Vuex from 'vuex'
import App from './App.vue'
import router from './router'
import store from './store'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './plugins/table.js'
import {library} from '@fortawesome/fontawesome-svg-core'
import {faStar} from '@fortawesome/free-solid-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'

library.add(faStar);
Vue.component('font-awesome-icon', FontAwesomeIcon);

// Vue.use(Vuex);
Vue.use(BootstrapVue);

Vue.config.productionTip = false;
Vue.prototype.APIHOST = 'http://localhost:8081/api/v1';

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app');
