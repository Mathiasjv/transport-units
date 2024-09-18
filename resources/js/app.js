import { createApp } from 'vue';
import TransportUnits from './components/TransportUnits.vue';


// Initialize Vue app
const app = createApp({});

// Register the component globally
app.component('transport-units', TransportUnits);

// Mount Vue app to the DOM
app.mount('#app');
