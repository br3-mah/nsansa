const mix = require("laravel-mix");

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

mix.js("src/js/app.js", "dist/js")
    .js("resources/js/app.js", "app.js")
    .js("src/js/ckeditor-classic.js", "dist/js")
    .js("src/js/ckeditor-inline.js", "dist/js")
    .js("src/js/ckeditor-balloon.js", "dist/js")
    .js("src/js/ckeditor-balloon-block.js", "dist/js")
    .js("src/js/ckeditor-document.js", "dist/js")
    .js('resources/js/bootstrap.js', 'js/vix.js')
    // .js('resources/js/app.js', 'dist/main.js').vue()
    .css("dist/css/_app.css", "dist/css/app.css")
    .sass('resources/sass/relaxed.scss', 'dist/relaxed.css')
    .options({
        processCssUrls: false,
    })
    .copyDirectory("src/json", "dist/json")
    .copyDirectory("src/fonts", "dist/fonts")
    .copyDirectory("src/images", "dist/images");
