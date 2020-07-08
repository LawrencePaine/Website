/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

Vue.component("appcomponent", require("./components/AppComponent.vue").default);
Vue.component("navbar", require("./components/NavBar.vue").default);
Vue.component("container", require("./components/container.vue").default);
const app = new Vue({
    el: "#app"
});

// vue.require('/Utilities/navscroll.js'); not sure on this one chief!
