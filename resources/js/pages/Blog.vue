<template>
  <div class="blog-main">
    <div v-for="(post,index) in posts" :key="index" class="card">
        <h1>{{post.title}}</h1>
        <p>{{post.content}}</p>
        <p>category: {{post.category.title}}</p>
        <ul class="tags-for">
            <li v-for="(tag, index) in post.tags" :key="index">{{tag.title}}</li>
        </ul>
        <!-- <p>{{$totalViews = views(post).count()}}</p> -->
        <router-link :to="{name:'slug', params:{slug:post.slug}} ">Read more...</router-link>
    </div>

    <a href="#" @click.prevent="getData(currentPage -1)">Prev</a>
    <span>{{currentPage}}</span>
    <a href="#" @click.prevent="getData(currentPage +1)" v-if="currentPage < lastPage">Next</a>

  </div>
</template>

<script>
import axios from 'axios';

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
        this.getData(1);
    },
    methods: {

        
            getData(page){
                
                axios.get('/api/posts', {
                    params: {
                        page:page
                    }
                }).then( resolve => {
                this.posts = resolve.data.results;
                this.posts = resolve.data.results.data;
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