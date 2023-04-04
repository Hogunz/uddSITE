require('./bootstrap');

import Alpine from 'alpinejs';
window.Alpine = Alpine;

Alpine.start();
import GLightbox from 'glightbox';
import '/path/to/glightbox.js';
const lightbox = GLightbox({
  selector: '.gallery a'
});
import 'glightbox/dist/css/glightbox.min.css';
