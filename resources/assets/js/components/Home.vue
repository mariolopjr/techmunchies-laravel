<template lang="pug">
section.hero.is-fullheight.home
  .hero-head: <site-nav></site-nav>
  .hero-body: .container.has-text-centered
      h1.title Traverse New Roads
      h2.subtitle A Development &amp; Design Company
  .hero-foot.has-text-centered
    p Copyright © {{ year }} techmunchies, inc
  <background-info></background-info>
</template>

<script>
import SiteNav from './Nav.vue'

export default {
  components: {
      SiteNav
  },

  data() {
    return {
      year: (new Date()).getFullYear(),
    }
  }
}
</script>
