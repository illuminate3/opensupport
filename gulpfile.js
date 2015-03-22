var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.copy('vendor/almasaeed2010/adminlte/bootstrap', 'public/bootstrap');
    mix.copy('vendor/almasaeed2010/adminlte/dist', 'public/dist');
    mix.copy('vendor/almasaeed2010/adminlte/plugins', 'public/plugsins');
});
