import Vue from "vue";
import VueRouter from "vue-router";
import Contacts from "./pages/Contacts";
import About from "./pages/About"

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },

        {
            path: '/about',
            name: 'about',
            component: About 
        }
    ]
});


// export della const dove abbiamo inserito le rotte, poi andiamo in front.js
export default router;