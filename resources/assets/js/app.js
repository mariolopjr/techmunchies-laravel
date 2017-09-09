
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';
import 'buefy/lib/buefy.css'

// Sentry Integration
import Raven from 'raven-js';
import RavenVue from 'raven-js/plugins/vue';

Raven
    .config('https://4962022e5dfe48c0868844ae3de75f45@sentry.io/214311')
    .addPlugin(RavenVue, Vue)
    .install();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Buefy, {
	defaultIconPack: 'fa'
});

Vue.component(
  'home',
  require('./components/Home.vue')
);

Vue.component(
  'blog',
  require('./components/Blog.vue')
);

Vue.component(
  'site-nav',
  require('./components/Nav.vue')
);

Vue.component(
  'site-footer',
  require('./components/Footer.vue')
);

Vue.component(
  'background-info',
  require('./components/BackgroundInfo.vue')
);

Vue.component(
  'post',
  require('./components/Post.vue')
);

Vue.component(
  'post-snippet',
  require('./components/PostSnippet.vue')
);

const app = new Vue({
    el: '#app',

    mounted() {
      //
    },

    created() {
        //
    }
});
