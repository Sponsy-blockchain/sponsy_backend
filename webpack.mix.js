let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/assets/js/app.js', 'public/js')
//   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copyDirectory('resources/assets/sponsy/images', 'public/images');
mix.copyDirectory('resources/assets/sponsy/fonts', 'public/fonts');

mix.scripts([
    'resources/assets/sponsy/js/vendor.js',
    'resources/assets/sponsy/js/main.js'
], 'public/js/all.js');

mix.styles([
    'resources/assets/sponsy/css/main.css'
], 'public/css/all.css');

//mix.copyDirectory('resources/assets/sponsy/assets', 'public/assets');
mix.copyDirectory('resources/assets/sponsy/assets/css/fonts/fontAwesome/webfonts', 'public/webfonts');
mix.copyDirectory('resources/assets/sponsy/assets/css/slick/ajax-loader.gif', 'public/css');

mix.scripts([
    'resources/assets/sponsy/assets/js/plugins.js',
    'resources/assets/sponsy/assets/js/ms-dist.js'
], 'public/js/wp.js');

mix.styles([
    'resources/assets/sponsy/assets/css/spectre-custom.css',
    'resources/assets/sponsy/assets/css/sidr/stylesheets/jquery.sidr.light.css',
    'resources/assets/sponsy/assets/css/fonts/fontAwesome/css/fontawesome-all.min.css',
    'resources/assets/sponsy/assets/css/fonts/font-styles-dist.css',
    'resources/assets/sponsy/assets/css/slick/slick-dist.css',
    'resources/assets/sponsy/assets/css/slick/slick-theme-dist.css',
    'resources/assets/sponsy/assets/css/portfolio-hovers.css',
    'resources/assets/sponsy/assets/css/main-styles.css',
    'resources/assets/sponsy/assets/css/style.css'
], 'public/css/wp.css');