<template>
  <div class="slider-carrousel">
     <!-- swiper -->
    <div class="swiper-top my-4">  
      <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
        <slide 
              v-for="(image, index) in slides" :key="index"
              class="bg-cover bg-no-repeat bg-center py-64"
              :style="{ backgroundImage: 'url(' + image.image + ')' }">
        </slide>
        <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
        <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>
      </swiper>
    </div>
     <div class="swiper-bottom my-4">  
      <!-- thumbnails -->
      <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
        <slide
              v-for="(image, index) in slides" :key="index"
              class="bg-cover bg-no-repeat bg-center cursor-pointer py-20"
              :style="{ backgroundImage: 'url(' + image.image + ')' }">
        </slide>
       
      </swiper>
    </div>
  </div>
</template>
<script>
import { swiper } from 'vue-awesome-swiper'
export default {
  components: {
    swiper
  },
  props: {
    slides:{
      type: Array,
      required: false
    },
    slidesPerView:{
      type: Number,
      default: 3,
    }
  },
  data() {
    return {
      swiperOptionTop: {
        spaceBetween: 10,
        loop: true,
        loopedSlides: this.slides.length,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      },
      swiperOptionThumbs: {
        spaceBetween: 30,
        slidesPerView: this.slidesPerView,
        loop: true,
        loopedSlides: this.slides.length, 
        slideToClickedSlide: true,
      }
    }
  },
  mounted() {
    this.$nextTick(() => {
      const swiperTop = this.$refs.swiperTop.swiper
      const swiperThumbs = this.$refs.swiperThumbs.swiper
      swiperTop.controller.control = swiperThumbs
      swiperThumbs.controller.control = swiperTop
    })
  }
}
</script>