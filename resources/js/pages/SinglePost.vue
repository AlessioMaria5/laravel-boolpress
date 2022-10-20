<template>
  <div>
    <h1>{{posts.title}}</h1>
    <p>{{posts.content}}</p>

    <ul>
        <li v-for="(tag, index) in posts.tags" :key="index">{{tag.title}}</li>
    </ul>
  </div>
</template>

<script>
export default {
    name: 'SinglePost',
    data(){
        return {
            posts: null,
            slug: null
        }
    },
    mounted() {
        this.getData()
    },
    methods: {

        getData(){
            let slug = this.$route.params.slug

            axios.get('/api/posts/' + slug).then(resolve => {

                this.posts = resolve.data.results
                console.log(resolve.data.results)
                
            })
        }
    }
}
</script>

<style>

</style>