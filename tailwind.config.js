const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                inter:['Inter', ...defaultTheme.fontFamily.sans],
                author:['Autour One', ...defaultTheme.fontFamily.sans],
                gugi:['Gugi', ...defaultTheme.fontFamily.sans],
                fredoka:['Fredoka One',...defaultTheme.fontFamily.sans],
                bublegum:['Bubblegum Sans',...defaultTheme.fontFamily.sans],
                roboto:['Roboto',...defaultTheme.fontFamily.sans],
                nunito:['Nunito Sans',...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            transparent: 'transparent',
            current: 'currentColor',
            'biru':'#06B6D4',
            'gelap':'#1E293B',
            'white':'#ffffff',
            'lightblue':'#0ea5e9',
            'light':'#F9FBFE',
            'kuning':'#f7df1e',
            'merah':'#fe372a',
            'blue': colors.blue,
            'gray': colors.gray,
            'orange': colors.orange,
            'amber': colors.amber,
            'lime': colors.lime,
            'emerald': colors.emerald,
            'teal': colors.teal,
            'cyan': colors.cyan,
            'light-blue': colors.lightBlue,
            'indigo': colors.indigo,
            'violet': colors.violet,
            'purple': colors.purple,
            'fuchsia': colors.fuchsia,
            'pink': colors.pink,
            'rose': colors.rose,
            'green':colors.green,
            'red':colors.red,
            'slate':colors.slate
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('preline/plugin'),
    ],
};
