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
    .setPublicPath('.')
    .options({
        fileLoaderDirs:{
            images: 'images',
            fonts: 'fonts',
        },
        processCssUrls: false,
    })
    .sourceMaps(true, 'source-map', 'source-map')

    .sass('sass/style.scss', 'css');
