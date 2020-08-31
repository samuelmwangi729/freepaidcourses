/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import { Form, HasError, AlertError } from 'vform';
window.Vue = require('vue');
import VueRouter from 'vue-router';
import swal from 'sweetalert';
Vue.use(VueRouter)
window.Form = Form;
window.swal = swal;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
let routes = [{
    path: '/home',
    component: require('./components/Admin.vue')
}]
const router = new VueRouter({
        routes
    })
    /**
     * The following block of code may be used to automatically register your
     * Vue components. It will recursively scan this directory for the Vue
     * components and automatically register them with their "basename".
     *
     * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
     */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('welcome-component', require('./components/WelcomeComponent.vue').default);
Vue.component('courses-component', require('./components/CoursesComponent.vue').default);
Vue.component('hacks-component', require('./components/TechHacksComponent.vue').default);
Vue.component('cracks-component', require('./components/CracksComponent.vue').default);
Vue.component('blog-component', require('./components/BlogComponent.vue').default);
Vue.component('about-component', require('./components/AboutComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('single-component', require('./components/SingleComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('admin-component', require('./components/Admin.vue').default);
Vue.component('addcourse-component', require('./components/AddCourse.vue').default);
Vue.component('viewcourses-component', require('./components/ViewCourses.vue').default);
Vue.component('techs-component', require('./components/TechHacks.vue').default);
Vue.component('gethacks-component', require('./components/GetHacks.vue').default);
Vue.component('getblogs-component', require('./components/GetBlogs.vue').default);
Vue.component('blogmenu-component', require('./components/BlogMenu.vue').default);
Vue.component('cmenu-component', require('./components/CracksMenu.vue').default);
Vue.component('allcracks-component', require('./components/Cracks.vue').default);
Vue.component('messages-component', require('./components/Messages.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
