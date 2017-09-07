<template lang="pug">
  #blog
    <site-nav></site-nav>
    <post-snippet v-for="post in posts.data" :post="post" :key="post.id"></post-snippet>
</template>

<script>
import SiteNav from './Nav.vue'
import PostSnippet from './PostSnippet.vue'

export default {
  components: {
      SiteNav,
      PostSnippet
  },

  data() {
    return {
      year: (new Date()).getFullYear(),
      posts: [],
    }
  },

  mounted() {
    axios
      .get('/posts')
      .then(response => this.posts = response.data['posts']);
  }
}
</script>
