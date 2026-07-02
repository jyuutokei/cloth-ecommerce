import.meta.glob([
    '../images/**',
    '../fonts/**'
]);

import { gsap } from "gsap";

import { Draggable } from "gsap/Draggable";
import { InertiaPlugin } from "gsap/InertiaPlugin";

import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

gsap.registerPlugin(Draggable, InertiaPlugin);

if (document.body.classList.contains('home-page')) {
    const sliderCont = document.querySelector('.x-slider-cont');
    const slider = document.querySelector('.x-slider');

    const getMinX = () => Math.min(0, sliderCont.offsetWidth - slider.offsetWidth);

    let dragInstance = Draggable.create(slider, {
        type: "x",
        bounds: {
            minX: getMinX(),
            maxX: 0
        },
        edgeResistance: 0.65,
        inertia: true,
        overshootTolerance: 1,

        // Recalculate limits mid-flight if bounds shift
        onThrowUpdate: function () {
            const minX = getMinX();
            this.vars.bounds.minX = minX;
        }
    })[0];

    window.addEventListener('resize', () => {
        if (dragInstance) {
            dragInstance.applyBounds({
                minX: getMinX(),
                maxX: 0
            });
        }
    });
}

if (document.body.classList.contains('product-page')) {
    const navProduct = document.querySelector('#nav-product');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            navProduct.classList.add('bg-layer-component', 'shadow-md');
        } else {
            navProduct.classList.remove('bg-layer-component', 'shadow-md');
        }
    });
}
