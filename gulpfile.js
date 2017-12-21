// Include gulp
var gulp = require('gulp');

// Include dependencies
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var minify = require('gulp-minify');
var webserver = require('gulp-webserver');
var concat = require('gulp-concat');
var watch = require('gulp-watch');

// Minify css
gulp.task('sass', function () {
  return gulp.src('./public/src/scss/app.scss')
    .pipe(sass())
    .pipe(cleanCSS({debug: true}, function(details) {
        console.log(details.name + ': ' + details.stats.originalSize);
        console.log(details.name + ': ' + details.stats.minifiedSize);
     }))
    .pipe(gulp.dest('./public/dist/css'));
});

// Sass watch
gulp.task('sass-watch', function () {
  gulp.watch('./public/src/scss/**/*.scss', ['sass']);
});

// Sass watch
gulp.task('js-watch', function () {
  gulp.watch('./public/src/js/**/*.js', ['js']);
});

// Minify js
gulp.task('js', function() {
  return gulp.src('./public/src/js/*.js')
    .pipe(minify({
        ext:{
            min:'-min.js'
        }
    }))
    .pipe(gulp.dest('./public/dist/js'))
});

// Development serve
gulp.task('webserver', function() {
  return gulp.src('public')
    .pipe(webserver({
      livereload: true,
      open: true
    }));
});

gulp.task('serve', ['sass', 'sass-watch', 'js', 'js-watch', 'webserver']);
