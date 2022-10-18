<template>
   <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
       <ul class="navbar-nav mr-auto">
            <li class="nav-item active" v-for="(posts, index) in menu" :key="index">
                <router-link class="nav-link" :to="{name: posts.link}">{{posts.name}}</router-link>
            </li>
       </ul>
       
   </div>
</template>

<script>

export default {
    name: 'HeaderComponent',
    data(){

        return {
            menu: [
                {
                    name: 'About',
                    link: 'about'
                },
                {
                    name: 'Blog',
                    link: 'blog'
                },
                {
                    name: 'Contacts',
                    link: 'contacts'
                },
            ]
        }
    }
}
</script>

<style>

</style>