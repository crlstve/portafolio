const mix = require('laravel-mix');

//Directory that contains our un-compiled CSS
mix.postCss('theme.css', 'assets/css', [
    require('tailwindcss'),
    require('postcss-nested')
])
    .options({
        processCssUrls: false
    });