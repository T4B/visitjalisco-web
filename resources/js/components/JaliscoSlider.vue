<template>
    <div class="slider w-full lg:w-6/12 ml-auto px-6 lg:px-0">
      <div class="swiper-top my-4">  
        <swiper :options="swiperOptionTop" class="gallery-top shadow-2xl" ref="swiperTop">
          <slide 
                v-for="(image, index) in gallery" :key="index"
                class="bg-cover bg-no-repeat bg-center py-56 relative"
                :style="{ backgroundImage: 'url(' + image.image + ')' }">
                <div class="multiply w-full absolute bottom-0">
                  <div class="multiply-purple py-8">
                    <div class="text-white px-20">
                        <font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-white mr-2 inline-block text-xl"></font-awesome-icon> 
                        <h2 class="inline-block" v-text="image.name"></h2>
                    </div>
                  </div>
                </div>
          </slide>
          <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
          <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>
        </swiper>
      </div>
      <div class="swiper-bottom my-8">  
        <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
          <slide
                v-for="(image, index) in gallery" :key="index"
                class="bg-cover bg-no-repeat bg-center cursor-pointer py-12 shadow-7xl cursor-pointer"
                :style="{ backgroundImage: 'url(' + image.image + ')' }">
          </slide>
        </swiper>
      </div>
      <!--<slider class="slider shadow-2xl" ref="swiper">
          <slide v-for="(image, index) in gallery" :key="index">
              <div :style="{ backgroundImage: 'url(' + image.image + ')' }"
                    class="py-56 bg-cover bg-no-repeat bg-center relative">
                  <div class="multiply w-full absolute bottom-0">
                    <div class="multiply-purple py-8">
                      <div class="text-white px-20">
                          <font-awesome-icon :icon="['fas', 'map-marker-alt']" fixed-width class="text-white mr-2 inline-block text-xl"></font-awesome-icon> 
                          <h2 class="inline-block" v-text="image.name"></h2>
                      </div>
                    </div>
                  </div>
              </div>
          </slide>
      </slider>
      <div class="py-6 w-full">
          <div class="flex flex-wrap -mx-4">
              <div class="w-full lg:w-1/3" v-for="(image, index) in gallery" :key="index">
                  <div class="bg-transparent p-4 rounded-lg text-center">
                      <div  :style="{ backgroundImage: 'url(' + image.image + ')' }"
                            class="bg-cover bg-no-repeat bg-center p-12 shadow-7xl cursor-pointer"
                            @click="changeSlider(index)"></div>
                  </div>
              </div>
          </div>
      </div>-->
  </div>
</template>
<script>
import { swiper } from 'vue-awesome-swiper'
export default {
  components: {
    swiper
  },
  props:{
    gallery:{
      type: Array,
      required: true,
    }
  },
  data() {
    return {
      swiperOptionTop: {
        spaceBetween: 10,
        loop: true,
        loopedSlides: this.gallery.length,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      },
      swiperOptionThumbs: {
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        loopedSlides: this.gallery.length, 
        slideToClickedSlide: true,
      }
    }
  },
  computed: { 
    swiper() {
      return this.$refs.swiper.swiper
    }
  },
  methods:{
    changeSlider(index) {
      this.swiper.slideToLoop(index);
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