import './bootstrap';
import { createApp } from 'vue'

const app = createApp()

app.component('counter', Counter)

app.mount('#app')
