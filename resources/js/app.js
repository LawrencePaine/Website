require("./bootstrap");

window.Vue = require("vue");

Vue.component("appcomponent", require("./components/AppComponent.vue").default);
Vue.component("navbar", require("./components/NavBar.vue").default);

const app = new Vue({
    el: "#app"
});
