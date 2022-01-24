
// list dependencies
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();
const rename = require('gulp-rename');
const concat = require('gulp-concat');


// create functions 

// scss
function compile_scss(){
  // return src('assets/scss/*.scss')
  return src([
    './node_modules/aos/dist/aos.css',
    './assets/scss/fonts.scss',
    './node_modules/magnify/dist/css/magnify.css',
    './assets/scss/styles.scss'
  ])
    .pipe(concat('main.css'))
    .pipe(sass())
    .pipe(prefix())
    .pipe(minify())
    .pipe(rename({
      suffix : '.min'
    }))
    .pipe(dest('assets/dist/css'))
}

// js
function js_min(){
  // return src('assets/js/*.js')
  return src([
    './node_modules/aos/dist/aos.js',
    './node_modules/lazyload/lazyload.min.js',
    './node_modules/jquery-parallax.js/parallax.min.js',
    './node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    './node_modules/slick-carousel/slick/slick.js',
    './node_modules/masonry-layout/dist/masonry.pkgd.min.js',
    './node_modules/magnify/dist/js/jquery.magnify.js',
    './assets/js/scripts.js'
  ])
    .pipe(concat('main.js'))
    .pipe(terser())
    .pipe(rename({
      suffix : '.min'
    }))
    .pipe(dest('assets/dist/js'))
}

// watch task
// function watch_task(){
//   browserSync.init({
//     proxy : 'http://localhost/dulfi/'
//   })
//   watch('assets/scss/*.scss', series(compile_scss, browserSync.reload));
//   watch('assets/js/*.js', series(js_min, browserSync.reload));
// }

function watch_task(){
  watch('assets/scss/*.scss', compile_scss);
  watch('assets/js/*.js', js_min);
}

exports.default = series(
  compile_scss,
  js_min, 
  watch_task
);

exports.style = compile_scss;
exports.js = js_min;
exports.watch = watch_task;