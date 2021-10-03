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
    .js('resources/js/authentication/form-1.js', 'public/js/authentication/form-1.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/plugins.scss', 'public/css')
    .sass('resources/sass/assets/admin.scss', 'public/css/')
    .sass('resources/sass/assets/structure-minimal.scss', 'public/css/')
    .sass('resources/sass/assets/elements/miscellaneous.scss', 'public/css/elements/miscellaneous.css')
    .sass('resources/sass/assets/elements/breadcrumb.scss', 'public/css/elements/breadcrumb.css')
    .sass('resources/sass/assets/authentication/form-1.scss', 'public/css/auth.min.css')
    .sass('resources/sass/assets/users/user-profile.scss', 'public/css/users/users-profile.css');

mix.scripts([
    'resources/js/admin.js',
    'resources/js/custom.js',
], 'public/js/admin.min.js').sourceMaps();

mix.scripts([
    'resources/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
    'resources/plugins/highlight/highlight.pack.js',
    'resources/js/ie11fix/fn.fix-padStart.js',
    'resources/js/scrollspyNav.js',
    'resources/plugins/font-icons/feather/feather.js',
    'resources/plugins/bootstrap-select/bootstrap-select.min.js',
    'resources/js/fonts.js',
    'resources/js/eventos.js',
], 'public/js/plugins.min.js').sourceMaps();
mix.copyDirectory('resources/fonts', 'public/fonts');

mix.styles([
    'resources/css/fonts.css',
    'resources/plugins/font-icons/fontawesome/css/regular.css',
    'resources/plugins/font-icons/fontawesome/css/fontawesome.css',
], 'public/css/fonts.min.css').sourceMaps();

mix.styles([
    'resources/css/custom.css',
    'resources/css/custom-styles.css',
], 'public/css/custom.min.css').sourceMaps();
