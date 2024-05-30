import Splide from '@splidejs/splide';
import '@splidejs/splide/css';


document.addEventListener('alpine:init', () => {
    Alpine.directive('splide', (el, { value, modifiers, expression }, { Alpine, effect, cleanup }) => {
        let splideInstance;

        splideInstance = new Splide(el, {
            type: 'loop',
            perPage: 3,
            autoplay: true,
            gap: 3,
            interval: 2000
        }).mount();

        cleanup(() => {
            if (splideInstance) {
                splideInstance.destroy();
                splideInstance = null;
            }
        });
    })
})


