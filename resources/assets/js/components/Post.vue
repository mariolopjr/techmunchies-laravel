<template lang="pug">
.post.v-cloak--hidden
  site-nav
  .post-container
    p {{ post.post.title }}
  site-footer
</template>

<script>
import SiteNav from './Nav.vue'
import SiteFooter from './Footer.vue'

export default {
  components: {
      SiteNav,
      SiteFooter
  },

  data() {
    return {
      year: (new Date()).getFullYear(),
    }
  },

  computed: {
    post: function() {
      return post
    }
  },
}
</script>
