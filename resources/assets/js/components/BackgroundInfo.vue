<template lang="pug">
.background-info
  span.background-container(
    @click='backgroundInfoVisible = !backgroundInfoVisible'
  ) i
    .background-popover(v-if='backgroundInfoVisible')
      span.label Photographer
      span.answer Tim Trad
      span.label Location
      span.answer Skógar, Garðabær, Iceland
      span.label Publish Date
      span.answer January 21, 2017
      span.label License
      span.answer
        a(
          href='http://creativecommons.org/publicdomain/zero/1.0/'
          target='_blank'
          title='Link to CC0 1.0 License'
        ) CC0 1.0
      span.label Image URL
      span.answer
        a(
          href='https://unsplash.com/photos/2gk6BDXSxlQ'
          target='_blank'
          title='Link to background image on Unsplash'
        ) Unsplash
</template>

<script>
export default {
  data() {
    return {
      backgroundInfoVisible: false,
    }
  }
}
</script>
