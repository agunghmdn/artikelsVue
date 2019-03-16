import Vue from 'vue';
import Router from 'vue-router';
import artikel from '@/components/Artikel.vue';
import artikelform from './components/ArtikelForm.vue';

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'artikel',
      component: artikel
    },
    {
      path: '/artikel/create',
      name: 'artikelCreate',
      component: artikelform
    },
    {
      path: '/artikel/:id',
      name: 'artikelEdit',
      component: artikelform
    },
  ],
});
