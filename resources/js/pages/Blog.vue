<template>
  <div class="main">

        <div v-for="(posts, index) in posts" :key="index" class="card">
            <h1>{{posts.title}}</h1>
            <p>{{posts.content}}</p>
        </div>

  </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'Blog',
    data(){
        return {
            posts: [],
            currentPage: 1,
            lastPage: null
        }

    
    },
    mounted() {
        this.getData();
    },
    methods: {

        getData(page) {
            
            axios.get('/api/posts').then( resolve => {

                this.posts = resolve.data.results
        
                this.currentPage = resolve.data.results.current_page;
                this.lastPage = resolve.data.results.last_page;
            }

            )
            
        }
    }
}
</script>

<style>

</style>