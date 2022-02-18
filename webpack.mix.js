const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/assets/js/app.js', 'public/js').js('resources/assets/js/main.js', 'public/js')
.sass('resources/assets/css/app.scss', 'public/css')
.sass('resources/assets/css/landing.scss', 'public/css')
.options({
    processCssUrls: false,
    postCss: [
        tailwindcss('./tailwind.config.js'),
    ]
})
