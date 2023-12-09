import './bootstrap';

import foobar from './foobar';
document.addEventListener('alpine:init', () => {
    window.Alpine.data('foobar', foobar);
});
