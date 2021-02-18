import Home from './components/Home'
import NotFound from './components/errors/NotFound'
import Signin from './components/Signin.vue'

export default{
    mode: 'history',
    routes: [
        {
            path: '*',
            component: NotFound,
        },
        {
            path: '/',
            component: Home,
        },
        {
            path: '/signin',
            component: Signin,
        }
    ]
}