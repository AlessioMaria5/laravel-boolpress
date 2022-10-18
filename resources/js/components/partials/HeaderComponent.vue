<template>
   <div class="header">
       <ul>
            <li v-for="(posts, index) in menu" :key="index">
                <router-link :to="{name: posts.link}">{{posts.name}}</router-link>
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
                    name: 'Home',
                    link: '#'
                },
                {
                    name: 'Blog',
                    link: '#'
                },
                {
                    name: 'Contacts',
                    link: '#'
                },
            ]
        }
    }
}
</script>

<style>

</style>