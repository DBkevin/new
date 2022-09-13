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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ])
    .postCss('resources/css/index.css', 'public/css')
    .postCss('resources/css/topic.css', 'public/css')
    .sass('resources/css/m_index.scss', 'public/css')
    .sass('resources/css/m_question.scss', 'public/css')
    .sass('resources/css/m_doctor.scss', 'public/css')
    .sass('resources/css/m_show.scss', 'public/css/');
