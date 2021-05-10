const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss-animatecss')({
            classes: ['animate__animated', 'animate__fadeIn', 'animate__bounceIn', 'animate__lightSpeedOut', 'animate__backInUp', 'animate__bounceInUp', 'animate__slideInUp'],
            settings: {
              animatedSpeed: 300,
              heartBeatSpeed: 300,
              hingeSpeed: 300,
              bounceInSpeed: 300,
              bounceOutSpeed: 300,
              animationDelaySpeed: 300
            },
            variants: ['responsive', 'hover', 'reduced-motion'],
          }),
    ],
};
