<template>
  <div class="main">
    <router-view></router-view>
  </Blog>

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