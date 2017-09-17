<template lang="pug">
.blog.v-cloak--hidden
  site-nav
  .post-snippet-container
    post-snippet(
      v-for='post in posts.data'
      :post='post'
      :key='post.id'
    )
  site-footer
</template>

<script>
import SiteNav from './Nav.vue'
import SiteFooter from './Footer.vue'
import PostSnippet from './PostSnippet.vue'

export default {
  components: {
      SiteNav,
      SiteFooter,
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
      .get(route('posts.index'))
      .then(response => this.posts = response.data['posts']);
  }
}
</script>
