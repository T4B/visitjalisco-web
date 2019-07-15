<template>
  <div class="slider relative"
       @mouseenter="stop"
       @mouseleave="start"
  >
    <swiper ref="slider"
            :options="options"
    >
      <slot />
      <div slot="pagination"
           class="swiper-pagination"
      />
      <div slot="button-prev"
           class="button-prev"
           v-if="!outsidearrows"
      >
        <font-awesome-icon :class="arrowscolor"
                           :icon="['fas', 'chevron-left']"
        />
      </div>
      <div slot="button-next"
           class="button-next"
           v-if="!outsidearrows"
      >
        <font-awesome-icon :class="arrowscolor"
                           :icon="['fas', 'chevron-right']"
        />
      </div>
    </swiper>
    <div slot="button-prev"
           class="button-prev"
           v-if="outsidearrows"
      >
        <font-awesome-icon :class="arrowscolor"
                           :icon="['fas', 'chevron-left']"
        />
      </div>
    <div slot="button-next"
          class="button-next"
          v-if="outsidearrows"
      >
        <font-awesome-icon :class="arrowscolor"
                           :icon="['fas', 'chevron-right']"
        />
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
    delay: {
      type: Number,
      default: 4000
    },
    slides: {
      type: Number,
      default: 1,
    },
    space: {
      type: Number,
      default: 0
    },
    loop: {
      type: Boolean,
      default: true
    },
    arrowscolor: {
      type: String,
      default: 'text-white',
    },
    outsidearrows: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      options: {
        loop: this.loop,
        autoHeight: true,
        navigation: {
          nextEl: '.button-next',
          prevEl: '.button-prev'
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        // autoplay: {
        //     delay: this.delay,
        // },
        slidesPerView: this.slides,
        spaceBetween: this.space,
        breakpoints: {
          1024: {
            slidesPerView: 1,
            spaceBetween: 0
          }
        }
      }
    }
  },
  computed: {
      swiper() {
          return this.$refs.slider.swiper
      },
  },
  methods: {
      start() {
          // this.swiper.autoplay.start();
      },
      stop() {
          // this.swiper.autoplay.stop();
      },
  }
}
</script>