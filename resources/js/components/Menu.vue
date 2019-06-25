<template>
  <nav class="nav-menu"
       :class="{'is-alt': isMenuAlt}"
  >
    <div class="container">
      <div v-if="$slots.top"
           class="menu-top flex"
      >
        <slot name="top" />
      </div>
      <div class="flex justify-between items-center py-2">
        <div class="menu-logo">
          <slot name="logo" />
        </div>
        <div class="menu"
             :class="{'is-active':active}"
        >
          <slot />
        </div>
        <button class="lg:hidden focus:outline-none mr-4 text-blue"
                @click="toggle"
        >
          <font-awesome-icon :icon="['fas', icon]"
                             size="lg"
          />
        </button>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  props: {
    top: {
      type: Number,
      default: 200,
    },
    alt: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      active: false,
      isMenuAlt: false,

    }
  },
  computed: {
    icon() {
      return this.active ? 'times' : 'bars';
    }
  },
  watch: {
    active() {
      if (this.active) {
        document.addEventListener('keyup', this.closeOnEsc);
      } else {
        document.removeEventListener('keyup', this.closeOnEsc);
      }
    },
  },
  mounted() {
    if (this.alt) {
      this.switchMenu()
    }
  },
  methods: {
    toggle() {
      this.active = !this.active;
    },
    close() {
      this.active = false;
    },
    closeOnEsc (event) {
      if (event.keyCode === 27) {
          this.close()
      }
    },
    switchMenu() {
      window.addEventListener('scroll', () => {
      const doc = document.documentElement;
      const top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
      this.isMenuAlt = top >= this.top
      }, { passive: true })
    },
  },
}
</script>
