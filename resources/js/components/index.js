import Vue from 'vue';
import { swiperSlide } from 'vue-awesome-swiper';
import { FontAwesomeIcon, FontAwesomeLayers, FontAwesomeLayersText } from '@fortawesome/vue-fontawesome';

Vue.component('slide', swiperSlide)
Vue.component('slider', require('./Slider.vue').default);
Vue.component('nav-menu', require('./Menu.vue').default);
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.component('font-awesome-layers', FontAwesomeLayers);
Vue.component('font-awesome-layers-text', FontAwesomeLayersText);
Vue.component('mi-jalisco-videos', require('./MiJaliscoVideos.vue').default);
Vue.component('jalisco-slider', require('./JaliscoSlider.vue').default);
Vue.component('regions-map', require('./RegionsMap.vue').default);
Vue.component('region-map', require('./RegionMap.vue').default);
Vue.component('slider-carousel', require('./SliderWithCarousel.vue').default);