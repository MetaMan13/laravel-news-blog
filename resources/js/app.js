import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'
import axios from 'axios'
window.axios = axios;
Vue.use(VueRouter)

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    created(){
        axios
        .get('http://127.0.0.1:8000/api/profile?api_token=sdasdasdasdas')
        .then(response => console.log(response))
        .catch(console.log);
    }
});
