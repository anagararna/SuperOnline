const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    // theme: {
    //     extend: {
    //         fontFamily: {
    //             sans: ['Figtree', ...defaultTheme.fontFamily.sans],
    //         },
    //     },
    // },
  
        theme: {
            extend:{
          fontFamily: {
            'bebas-neue-pro': ['Bebas Neue Pro Regular', 'sans-serif'],
            'bebas-neue': ['BebasNeue-Regular', 'sans-serif'],
            'bebas-neue-pro-book' : ['Bebas Neue Pro Book'],
            'bebas-neue-pro-bold' : ['Bebas Neue Pro Bold']
          },
        },
          extend: {},
        },
        variants: {},
        plugins: [],
      
      

    plugins: [require('@tailwindcss/forms')],

   
    theme: {
        extend: {
        colors: { 
            '00c6bb': '#00c6bb',
            'f8e483': '#f8e483',
            'd6a329': '#d6a329',
            'fbd800': '#fbd800'
        },
        },
    },
    variants: {},
    plugins: [],
      
};
