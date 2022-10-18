import button from "./UI/button";

import './bootstrap';

import {createApp} from 'vue';

const app = createApp({});

app.component('base-btn', button);
app.mount('#app');
