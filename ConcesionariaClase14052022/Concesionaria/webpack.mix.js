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
mix .postCss('resources/css/personal.css', 'public/css',[ ]);
mix.postCss('resources/css/home1.css', 'public/css',[]);
mix.postCss('resources/css/home2.css', 'public/css', []);
mix.postCss('resources/css/nosotros1.css', 'public/css',[]);
mix.postCss('resources/css/nosotros2.css', 'public/css', []);
mix.postCss('resources/css/contactos1.css', 'public/css', []);
mix.postCss('resources/css/contactos2.css', 'public/css', []);
mix.postCss('resources/css/automovil1.css', 'public/css', []);
mix.postCss('resources/css/automovil2.css', 'public/css', []);

