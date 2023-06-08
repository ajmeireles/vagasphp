import './bootstrap';
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'
import darkMode from "./modules/darkMode.js";

window.Alpine = Alpine;
Alpine.plugin(mask)
Alpine.data('darkMode', darkMode);

Alpine.start();
