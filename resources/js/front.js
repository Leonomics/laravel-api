window.axios = require("axios");
window.Vue = require("vue");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
import App from "./views/App.vue";

const app = new Vue({
    el: "#app",
    render: (h) => h(App),
});