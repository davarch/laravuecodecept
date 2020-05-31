import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios'
import todos from './modules/todos'

axios.defaults.baseURL = 'http://127.0.0.1:8000/api';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        todos
    }
})

