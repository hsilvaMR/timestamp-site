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
// Executar o mix #npm rum dev  | #npm run watch
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
// // integração das dependenas bt js 
mix.styles(['resources/css/custom.css'], 'public/css/style.css')

.styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')

// .styles('resources/views/plataforma/stylePFM.css/', 'public/plataforma/css/stylePFM.css')

.scripts('resources/js/custom.js', 'public/js/script.js')

//.scripts('resources/views/plataforma/js/scriptPFM.js', 'public/plataforma/js/scriptPFM.js')

.scripts(['node_modules/jquery/dist/jquery.js'], 'public/js/jquery.js')

.sass('resources/sass/custom.scss/', 'public/css/mainSass.css')

.scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');