const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/home.scss', 'public/css/');
mix.copyDirectory('resources/image', 'public/image');
