import Home from './components/Home.vue';
import Login from './components/auth/Login.vue';
import Gigs from './components/Gigs.vue';
import Bands from './components/Bands.vue';
import Bookers from './components/Bookers.vue';

export const routes = [
    {
         path: '/',
         component: Home,
         meta: {
             requiresAuth: false
         }
    },
    {
         path: '/login',
         component: Login
    },
    {
        path: '/gigs',
        component: Gigs
   },
   {
    path: '/bands',
    component: Bands
   },
   {
    path: '/bookers',
    component: Bookers
   }
];
