
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers'
import Layout from '../js/Shared/Layout.vue'


InertiaProgress.init({
    color:"orangered",
    showSpinner: true,
})

createInertiaApp({
  resolve: async name => {
    let page = await resolvePageComponent(`./Pages/${name}.vue`,import.meta.glob("./Pages/**/*.vue"));
    page=page.default
    page.layout ??= Layout

    return page.layout;

},
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
