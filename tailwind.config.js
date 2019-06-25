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

        gray: '#3C3C3B',
        'gray-navbar': '#606060',
        orange: '#BB7000',
        purple: '#624298',
        red: '#FF4363',

        blend: 'rgba(0, 0, 0, 0.25)',
        navbar: 'rgba(0, 0, 0, 0.75)',
    },
    container: {
        center: true,
    },
    extend: {
        inset: {
            '16': '4rem',
        },
        textColor: {
            'current': 'currentColor'
        }
    }
  },
  variants: {},
  plugins: []
}
