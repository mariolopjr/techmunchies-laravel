<template lang="pug">
nav.nav
  .nav-left
    a(href="/").nav-item techmunchies
  span.nav-toggle
    span: a.nav-item home
    span: a.nav-item blog
    span: a.nav-item gitlab
  .nav-right.nav-menu
    a(href="/").nav-item home
    a(href="/blog").nav-item blog
    span.nav-item: a(href="https://github.com/mariolopjr"): span.icon: i.fa.fa-github
</template>
