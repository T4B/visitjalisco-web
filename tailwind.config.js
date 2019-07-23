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
            '200': '#E2E2E2',
            '400': '#606060',
            '500': '#3C3C3B',
            '600': '#575756'
        },
        orange: {
            '100':'#FFA245',
            '200': '#BB7000',
        },
        purple: {
            '400':'#A445FF',
            '500': '#624298',
        },
        //red: '#FF4363',
        red: {
            '300': '#FF4545',
            '400': '#FF4363',
            '500': '#AE2E44',
        },
        green: {
            '200': '#94CE24',
            '300': '#84EFB7',
            '400': '#8FD661',
        },
        blue: {
            '400': '#45AFFF',
            '500': '#4945FF',
        },
        
        //blend: 'rgba(0, 0, 0, 0.25)',
        blend: {
            '25': 'rgba(0, 0, 0, 0.25)',
            '40': 'rgba(0, 0, 0, 0.40)',
        },
        'blend-purple' : {
            '30' : 'rgba(127, 86, 197, 0.3)',
        },
        navbar: 'rgba(0, 0, 0, 0.75)',
    },
    container: {
        center: true,
    },
    extend: {
        inset: {
            '8': '2rem',
            '16': '4rem',
        },
        textColor: {
            'current': 'currentColor'
        },
        fontSize: {
            '7xl' : '4.5rem',
            '8xl' : '5rem',
            '12xl' : '8rem',
        },
        boxShadow: {
            '3xl' : '1px 1px 7px 0px rgba(0,0,0,0.65)',
            '7xl': '7px 7px 5px 0px rgba(0,0,0,0.1)',
        },
    }
  },
  variants: {},
  plugins: []
}
