<template>
    <div class="w-full lg:w-6/12 ml-auto px-10 lg:px-0">
      <slider class="slider shadow-2xl" ref="swiper">
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
      </div>
  </div>
</template>
<script>
export default {
  props:{
    gallery:{
      type: Array,
      required: true,
    }
  },
  data() {
    return {
      
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
  }
}
</script>