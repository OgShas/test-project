import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import '../scss/app.scss';
// import vuetify from './plugins/vueity'
import { createApp } from 'vue';
import DigitalClock from './components/DigitalClock.vue';

const app = createApp({});
app.component('digital-clock', DigitalClock);

app.mount('#app');
