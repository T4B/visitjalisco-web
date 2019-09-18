const theme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    fontFamily: {
        primary: ['Questrial', 'sans-serif'],
        secondary: ['Questrial', 'sans-serif'],
        serif: ['Questrial', 'sans-serif'],
        //secondary: ['Arimo', 'sans-serif'],
        //serif: ['Noto Serif SC', 'serif'],
        
        //montserrat: ['Montserrat', 'sans-serif'],
    },
    colors: {
        transparent: theme.colors['transparent'],
        white: theme.colors['white'],
        black: theme.colors['black'],

        grey: '#3C3C3B',
        gray: {
            '50':  '#EDEDED',
            '100': '#F4F4F4',
            '200': '#E2E2E2',
            '300': '#D6D4D4',
            '400': '#606060',
            '500': '#3C3C3B',
            '600': '#575756',
            '700': '#AFAEAE',
            '800': '#878787',
        },
        orange: {
            '100':'#FFA245',
            '200': '#BB7000',
            '300': '#F39200',
        },
        purple: {
            '200': '#7557C1',
            '300': '#8172ED',
            '400':'#A445FF',
            '500': '#624298',
        },
        //red: '#FF4363',
        red: {
            '300': '#FF4545',
            '400': '#FF4363',
            '500': '#AE2E44',
            '600': '#F22E00',
        },
        green: {
            '100': '#74E8BB',
            '200': '#94CE24',
            '300': '#84EFB7',
            '400': '#8FD661',
            '500': '#61BC57',
            '600': '#227C15'
        },
        blue: {
            '300': '#70C3F2',
            '400': '#45AFFF',
            '500': '#4945FF',
        },
        pink: {
            '400': '#EF708C',
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
        map: '#C6D0BF',
    },
    container: {
        center: true,
    },
    extend: {
        inset: {
            '4': '1rem',
            '8': '2rem',
            '16': '4rem',
        },
        textColor: {
            'current': 'currentColor'
        },
        fontSize: {
            '7xl' : '4.5rem',
            '8xl' : '5rem',
            '11xl' : '7rem',
            '12xl' : '8rem',
        },
        boxShadow: {
            '3xl' : '1px 1px 7px 0px rgba(0,0,0,0.65)',
            '7xl': '7px 7px 5px 0px rgba(0,0,0,0.1)',
        },
        spacing: {
            '36' : '9rem',
        },
        width:{
            '2/7': '28.5714285%',
            '3/7': '42.8571429%',
        },
        borderRadius:{
            'xl' : '1rem',
        }
    }
  },
  variants: {},
  plugins: []
}
