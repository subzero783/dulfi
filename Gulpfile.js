
// list dependencies
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const terser = require('gulp-terser');

// create functions

// scss
function compile_scss(){
  return src('assets/scss/*.scss')
    .pipe(sass())
    .pipe(prefix())
    .pipe(minify())
    .pipe(dest('assets/dist/css'))
}

// js
function js_min(){
  return src('assets/js/*.js')
    .pipe(terser())
    .pipe(dest('assets/dist/js'))
}

// watch task
function watch_task(){
  watch('assets/scss/*.scss', compile_scss);
  watch('assets/js/*.js', js_min)
}

exports.default = series(
  compile_scss,
  js_min, 
  watch_task
);