const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]) .styles([
    'public/assets/css/all.min.css',
    'public/assets/css/animate.min.css',
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/jquery.mb.YTPlayer.min.css',
    'public/assets/css/magnific-popup.css',
    'public/assets/css/owl.carousel.min.css',
    'public/assets/css/owl.theme.default.min.css',
    'public/assets/css/responsive.css',
    'public/assets/css/style.css',
    'public/assets/css/themify-icons.css',
],'public/css/all.css');

if (mix.inProduction()) {
    mix.version();
}
