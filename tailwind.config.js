import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gold: {
                    300: '#f9d77e',
                    400: '#f7c65c',
                    500: '#f5b942',
                    600: '#d9a431',
                    700: '#b88a26',
                    800: '#96701c',
                    900: '#755716',
                },
                black: '#000000',
            },
            backgroundImage: {
                'gold-gradient': 'linear-gradient(to right, #d9a431, #755716)',
            },
        },
    },

    plugins: [forms],
};
