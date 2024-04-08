import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss';


import.meta.glob([
    '../img/**'
]);

import * as bootstrap from 'bootstrap';


const { createApp } =  Vue

  createApp({
    data() {
        return {
            navLinks : [
                "Characters","Comics", "movies", "tv", "Games", "Collectibles", "videos", "Fans", "news", "Shop" 
            ],
        }
    },
  }).mount('#app');

