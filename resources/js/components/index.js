import Vue from 'vue';
import { swiperSlide } from 'vue-awesome-swiper';


Vue.component('slide', swiperSlide)
Vue.component('slider', require('./Slider.vue').default);