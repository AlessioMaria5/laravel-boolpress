<template>
  <div class="main">
    <div v-for="(post,index) in posts" :key="index" class="card">
        <h1>{{post.title}}</h1>
        <p>{{post.content}}</p>
    </div>

    <a href="#" @click.prevent="getData(currentPage -1)">Prev</a>
    <span>{{currentPage}}</span>
    <a href="#" @click.prevent="getData(currentPage +1)" v-if="currentPage < lastPage">Next</a>

  </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'HomeComponent',
    data(){
        return {
            posts: [],
            currentPage: 1,
            lastPage: null
        }

    
    },
    mounted() {
        this.getData(2);
    },
    methods: {

        
            getData(page){
                
                axios.get('/api/posts', {
                    params: {
                        page: page
                    }
                }).then( resolve => {
                this.posts = resolve.data.results;
                console.log(this.posts);
                this.posts = resolve.data.results.data;
                console.log(this.posts);
                this.currentPage = resolve.data.results.current_page;
                console.log(this.currentPage)
                this.lastPage = resolve.data.results.last_page;
                

                
            }

            )
            
        }
    }
}
</script>

<style>

</style>