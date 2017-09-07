<template lang="pug">
  article.snippet
    p.date {{ post.created_at }}
    p.title {{ post.title }}
    p.excerpt {{ post.body.substring(0, 100) }}
</template>

<script>
export default {
  props: [
    'post'
  ],

  data() {
    return {

    }
  }
}
</script>
