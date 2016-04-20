'use strict';

var gulp = require('gulp'),
    eslint = require('gulp-eslint'),
    sass = require('gulp-sass'),
    prefix = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');

// Lint, compile and minify javascript
gulp.task('js', function() {
  gulp.src('./src/js/*.js')
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(uglify().on('error', showError))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./dist/'));
});

// Compile and minify stylesheets
gulp.task('css', function() {
  gulp.src('./src/css/*.scss')
    .pipe(sass({
      includePaths: [
        'src/vendor/foundation/scss',
        'src/vendor/slick-carousel/slick'
      ]}
    ).on('error', showError))
    .pipe(prefix('last 2 versions'))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./dist/'));
});

// Lint, compile and minify javascript: on save
gulp.task('watch', function() {
  gulp.watch(['./src/js/*.js'], ['js']);
  gulp.watch(['./src/css/*.scss'], ['css']);
});

// Lint, compile and minify javascript: run once
gulp.task('default', ['js', 'css']);

// Error function
function showError (error) {
  console.log(error.toString());
  this.emit('end');
}