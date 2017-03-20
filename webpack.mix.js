const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/bootstrap.js', 'public/js/app.js')
    .js('resources/assets/js/custom.js', 'public/js/admin.js')
    .js(['resources/assets/js/public/fastclick.js',
        'resources/assets/js/public/foundation.min.js',
        'resources/assets/js/public/modernizr.js',
        'resources/assets/js/public/placeholder.js'], 'public/js/public.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .combine([
        'resources/assets/css/admin/styles.css'
    ], 'public/css/admin.css')
    .combine(['resources/assets/css/public/custom.css',
        'resources/assets/css/public/foundation.css',
        'resources/assets/css/public/normalize.css'], 'public/css/public.css');