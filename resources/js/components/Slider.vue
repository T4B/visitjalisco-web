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
      >
        <font-awesome-icon class="text-white"
                           :icon="['fas', 'chevron-left']"
        />
      </div>
      <div slot="button-next"
           class="button-next"
      >
        <font-awesome-icon class="text-white"
                           :icon="['fas', 'chevron-right']"
        />
      </div>
    </swiper>
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
  },
  data() {
    return {
      options: {
        loop: true,
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