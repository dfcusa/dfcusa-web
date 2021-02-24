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

mix
    .setPublicPath('app/webroot/')
    .options({
        fileLoaderDirs:{
            images: 'images',
            fonts: 'fonts',
        }
    })
    .sourceMaps(true, 'source-map', 'source-map')

    .sass('app/webroot/sass/modern/app.scss', 'app/webroot/css/modern')
    .sass('app/webroot/challenges/dogoodfromhome/sass/style.scss', 'app/webroot/challenges/dogoodfromhome/css');
