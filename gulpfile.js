const gulp = require('gulp');
const stylus = require('gulp-stylus');
const nib = require('nib');
const autoprefixer = require('autoprefixer');
const plumber = require('gulp-plumber');
const mqpacker = require("css-mqpacker");
const postcss = require("gulp-postcss");
const uglify = require("gulp-uglify");
const browserify = require('browserify');
const source = require('vinyl-source-stream');
const streamify = require('gulp-streamify');
const sourcemaps = require('gulp-sourcemaps');
const buffer = require('vinyl-buffer');
const minimist = require('minimist');

gulp.task('stylus', function() {
  gulp.src('front/stylus/app.styl')
    .pipe(plumber())
    .pipe(stylus({
      use: [nib()],
      include: 'node_modules',
      compress: true,
      'include css': true,
    }))
    .pipe(postcss([
      mqpacker,
      autoprefixer({
        browsers:['Android >= 4.4', 'iOS >= 8']
      })
    ]))
    .pipe(gulp.dest('webroot/css/'));
});

gulp.task('js', function() {
  browserify({
    entries: ['front/js/app.js'],
    transform: [['babelify', {presets: ['env'], sourceMaps: true}], ['browserify-shim', { global: true }]],
    debug: true
  })
  .bundle()
    .pipe(source('app.js'))
    .pipe(streamify(uglify({mangle: false})))
    .pipe(gulp.dest('webroot/js'))
});

gulp.task('default', function() {
  gulp.watch(['front/js/*.js'],['js']);
  gulp.watch(['front/stylus/*.styl','front/stylus/**/*.styl'],['stylus']);
});