const theme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    fontFamily: {
        primary: ['Questrial', 'sans-serif'],
        secondary: ['Arimo', 'sans-serif'],
        serif: ['Noto Serif SC', 'serif'],
        //montserrat: ['Montserrat', 'sans-serif'],
    },
    colors: {
        transparent: theme.colors['transparent'],
        white: theme.colors['white'],
        black: theme.colors['black'],

        red: '#FF4363',
        orange: '#BB7000',
        purple: '#624298',
        gray: '#3C3C3B',
    },
    container: {
        center: true,
    },
    inset: {
        '16' : '4rem',
    },
    extend: {}
  },
  variants: {},
  plugins: []
}
