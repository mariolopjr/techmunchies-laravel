<template lang="pug">
footer.footer
  .container
    .content.has-text-centered
      p Copyright © {{ year }} techmunchies, inc
</template>

<script>
export default {
  props: [
    'year'
  ],

  data() {
    return {
    }
  },
}
</script>
