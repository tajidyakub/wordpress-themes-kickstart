/**
 * Webpack configurations done via Laravel Mix.
 */
let mix = require('laravel-mix');

mix.options({
    //extractVueStyles: false,
    processCssUrls: false,
    //uglify: {},
    //purifyCss: false,
    //purifyCss: {},
    postCss: [require('autoprefixer')],
    clearConsole: true
});

mix.sass('style.scss', './')
    .js('scripts/app.js', './');
