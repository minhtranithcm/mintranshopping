const mix = require('laravel-mix');

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

 
// mix.js('resources/js/app.js', 'public/js');
// mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/@popperjs/core/dist/cjs/popper.js', 'public/js/popper.js');



// mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/bootstrap.css');