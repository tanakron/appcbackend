var gulp = require('gulp'),
  gutil = require('gulp-util'),
  connect = require('gulp-connect'),
  watch = require('gulp-watch'),
  less = require('gulp-less'),
  sass = require('gulp-sass'),
  jshint = require('gulp-jshint'),
  usemin = require('gulp-usemin'),
  minifyCss = require('gulp-minify-css'),
  minifyJs = require('gulp-uglify'),
  concat = require('gulp-concat'),
  minifyHTML = require('gulp-minify-html'),
  runSequence = require('run-sequence'),
  reporter = require('jshint-stylish'),
  del = require('del'),
  foreach = require('gulp-foreach');

// Web server task
gulp.task('webserver', function() {
  connect.server({
    livereload: true,
    root: ['app', '.tmp']
  });
});

// Live reload task
gulp.task('livereload', ['jshint'], function() {
  gulp.src(['app/**/*.html', '.tmp/styles/*.css', 'app/scripts/{,*/}*.js']).pipe(watch(['app/**/*.html', '.tmp/styles/*.css', 'app/scripts/{,*/}*.js'])).pipe(connect.reload());
});

// Less task
gulp.task('less', function() {
  gulp.src(['app/styles/less/app.less', 'app/styles/less/app.skins.less']).pipe(less({
    strictMath: true
  }).on('error', errorMsg)).pipe(gulp.dest('.tmp/styles'));
});

function errorMsg(err) {
  console.log(err.message.toString());
  this.emit("end");
}

// Sass task
gulp.task('sass', function() {
  gulp.src(['app/styles/scss/app.scss', 'app/styles/scss/app.skins.scss']).pipe(sass.sync().on('error', sass.logError)).pipe(gulp.dest('.tmp/styles'));
});

// Jshint task
gulp.task('jshint', function() {
  gulp.src(['app/scripts/**/*.js', '!app/scripts/helpers/**/*.js']).pipe(jshint()).pipe(jshint.reporter('jshint-stylish'));
});

// Watch file changes
gulp.task('watch', function() {
  gulp.watch('app/scripts/**/*.js', ['jshint']);
  //gulp.watch('app/styles/**/*.less', ['less']);
  gulp.watch('app/styles/**/*.scss', ['sass']);
});

// Build tasks
gulp.task('build-tasks', ['sass', 'build-climacon', 'build-data', 'build-fonts', 'build-localization', 'build-vendor', 'build-scripts', 'build-images', 'build-views']);

// Clean out tmp files
gulp.task('clean:tmp', function() {
  return del(['.tmp/styles/**/*']);
});

// Remove compiled styles from styles folder
gulp.task('clean:styles', function() {
  return del(['app/styles/app.css', 'app/styles/app.skins.css']);
});

// Move stylesheets to tmp folder
gulp.task('build-climacon', function() {
  return gulp.src('app/styles/climacons-font.css').pipe(gulp.dest('dist/styles'))
});

// Copy fonts to dist
gulp.task('build-fonts', function() {
  return gulp.src('app/fonts/**/{,*/}*.*').pipe(gulp.dest('dist/fonts'));
});

// Copy localization files to dist
gulp.task('build-localization', function() {
  return gulp.src('app/l10n/**/{,*/}*.*').pipe(gulp.dest('dist/l10n'));
});

// Copy Vendor files to dist
gulp.task('build-vendor', function() {
  return gulp.src('app/vendor/**/{,*/}*.*').pipe(gulp.dest('dist/vendor'));
});

// Copy data folder to dist
gulp.task('build-data', function() {
  return gulp.src('app/data/**/{,*/}*.*').pipe(gulp.dest('dist/data'));
});

// Copy images to dist
gulp.task('build-images', function() {
  return gulp.src('app/images/**/*.*').pipe(gulp.dest('dist/images'));
});

// Copy scripts to dist
gulp.task('build-scripts', function() {
  return gulp.src('app/scripts/*/*.*').pipe(gulp.dest('dist/scripts'));
});

// Copy views to dist
gulp.task('build-views', function() {
  return gulp.src('app/views/{,*/}*.html').pipe(minifyHTML()).pipe(gulp.dest('dist/views'));
});

// concat, minify
gulp.task('usemin', function () {
  return gulp.src('app/*.html').pipe(foreach(function (stream, file) {
    return stream
      .pipe(usemin({
        js: [minifyJs({
          mangle: false
        }), 'concat'],
        css: [minifyCss({
          keepSpecialComments: 0,
          processImport: false
        }), 'concat']
      }))
      .pipe(gulp.dest('dist/'));
    }))
});

gulp.task('default', ['clean:styles', 'sass', 'webserver', 'livereload', 'watch']);
gulp.task('build', function(callback) {
  runSequence('clean:tmp', ['clean:styles', 'sass', 'build-tasks'], 'usemin', callback);
});