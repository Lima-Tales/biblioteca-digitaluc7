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
        //
    ]);
    mix
    .sass('resources/sass/app.scss', 'public/css') // Compilar SCSS
    .js('resources/js/app.js', 'public/js') // Compilar JS
    .copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css') // Copiar o CSS do AdminLTE
    .copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js') // Copiar o JS do AdminLTE
    .copy('node_modules/admin-lte/plugins', 'public/plugins'); // Copiar plugins do AdminLTE
