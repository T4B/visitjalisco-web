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

        grey: '#3C3C3B',
        gray: {
            '100': '#F4F4F4',
            '400': '#606060',
            '500': '#3C3C3B',
            '600': '#575756'
        },
        orange: '#BB7000',
        purple: '#624298',
        //red: '#FF4363',
        red: {
            '400': '#FF4363',
            '500': '#AE2E44',
        },
        
        //blend: 'rgba(0, 0, 0, 0.25)',
        blend: {
            '25': 'rgba(0, 0, 0, 0.25)',
            '40': 'rgba(0, 0, 0, 0.40)',
        },
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
        },
        fontSize: {
            '8xl' : '5rem',
            '12xl' : '8rem',
        },
        boxShadow: {
            '7xl' : '7px 7px 5px 0px rgba(0,0,0,0.1)',
        },
    }
  },
  variants: {},
  plugins: []
}
