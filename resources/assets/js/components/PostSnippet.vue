<template lang="pug">
article.snippet
  p.date: small {{ date }}
  p.title {{ post.title }}
  p.excerpt {{ post.body.substring(0, 100) }}
  hr
</template>

<script>
import moment from 'moment'

export default {
  props: [
    'post'
  ],

  data() {
    return {
    }
  },

  computed: {
    date: function() {
      return moment(this.post.created_at).format('MMM DD, YYYY')
    }
  },
}
</script>
