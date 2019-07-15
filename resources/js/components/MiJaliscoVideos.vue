<template>
  <div class="container px-10 pb-10 pt-0 lg:px-0">
    <div class="w-full">
      <div  :style="{ backgroundImage: 'url(' + active.preview + ')' }" 
            class="py-64 bg-cover bg-no-repeat bg-center w-5/6 mx-auto shadow-7xl mb-8 bg-gray-400"></div>
      <div class="py-8 text-gray-400 text-2xl leading-tight" v-html="active.text_es"></div>
    </div>
    <div class="w-full">
      <ul class="w-full lg:w-auto flex justify-start text-2xl">
        <li class="mr-3 lg:mx-1">
          <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="#" target="_blank" rel="noopener">
              <font-awesome-icon :icon="['fas', 'plus-square']" fixed-width></font-awesome-icon>
          </a>
        </li>
        <li class="mr-3 lg:mx-1">
          <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.facebook.com/JaliscoEsMexico/" target="_blank" rel="noopener">
              <font-awesome-icon :icon="['fab', 'facebook-square']" fixed-width></font-awesome-icon>
          </a>
        </li>
        <li class="mr-3 lg:mx-1">
          <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://twitter.com/JaliscoEsMexico" target="_blank" rel="noopener">
              <font-awesome-icon :icon="['fab', 'twitter-square']" fixed-width></font-awesome-icon>
          </a>
        </li>
        <li class="lg:mr-0 lg:mx-1">
          <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="https://www.pinterest.com" target="_blank" rel="noopener">
              <font-awesome-icon :icon="['fab', 'pinterest']" fixed-width></font-awesome-icon>
          </a>
        </li>
        <li class="lg:mx-1">
          <a class="inline-block text-red-400 w-8 h-8 flex justify-center items-center" href="mailto:example@example.com" target="_blank" rel="noopener">
              <font-awesome-icon :icon="['far', 'envelope']" fixed-width></font-awesome-icon>
          </a>
        </li>
      </ul>
      <hr class="h-1 bg-gray-400 opacity-25 my-10">
    </div>
    <div class="w-full px-10">
        <slider 
            class="shadow-2xl" 
            :slides="3" 
            :space="30"  
            :arrowscolor="'text-red-400'"
            :outsidearrows="true"
            ref="carrousel" 
            @click.native="sliderClicked($event)">
            <slide v-for="video in videos" :key="video.id">
                  <div class="multiply py-32 px-10  bg-cover bg-no-repeat bg-center relative" 
                    :style="{ backgroundImage: 'url(' + video.preview + ')' }"
                    >
                    <div class="text-white absolute bottom-8 font-serif" >
                        <h2 class="font-bold text-xl" v-text="video.title_es"></h2>
                        <p v-text="video.subtitle_es"></p>
                    </div>
                  </div>
            </slide>
        </slider>
      </div>
  </div>
</template>
<script>
export default {
  props:{
    videos:{
      type: Array,
      required: true,
    }
  },
  data() {
    return {
      active: null,
    }
  },
  created(){
    [this.active] = this.videos
  },
  computed: {
    swiper() {
      //return this.$refs.swiper.swiper
      return this.$refs.carrousel.$refs.slider.swiper
    }
  },
  methods:{
    changeVideo(event){
      let slide = event.currentTarget;
      this.active = this.videos[slide.attributes['data-swiper-slide-index'].nodeValue];
      
    },
    sliderClicked: function (event) {
      if (!event.target.classList.contains('swiper-pagination-bullet') && !event.target.classList.contains('fa-chevron-right') && !event.target.classList.contains('fa-chevron-left') ){
        if (this.swiper.clickedSlide !== 'undefined'){
          let slide = this.swiper.clickedSlide;
          this.active = this.videos[slide.attributes['data-swiper-slide-index'].nodeValue];
        }
      }
    }
  }
}
</script>