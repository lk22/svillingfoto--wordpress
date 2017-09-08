const elixir = require('laravel-elixir');
const sass = require('gulp-sass');

elixir((mix) => {
      mix.sass('./sass/style.scss', './style.css');
});