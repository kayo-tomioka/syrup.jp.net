/***************************************************************************
* DEPENDENCIES
***************************************************************************/

var gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync  = require('browser-sync'),
    concat       = require('gulp-concat'),
    plumber      = require('gulp-plumber'),
    reload       = browserSync.reload,
    rename       = require('gulp-rename'),
    rubySass     = require('gulp-ruby-sass'),
    sprite       = require('gulp.spritesmith'),
    uglify       = require('gulp-uglify'),
    jade         = require('gulp-jade')
;

/***************************************************************************
* FILE DESTINATIONS
***************************************************************************/

var paths = {
  'dest'      : 'public/',
  'vhost'     : 'example.dev',
  'port'      : 3000,
// html
  'htmlDest'  : 'public/',
  'htmlFiles' : 'dev/*.html',
// images
  'imgDest'   : 'public/img',
  'imgDir'    : 'dev/img',
// js
  'jsDest'    : 'public/js',
  'jsFiles'   : 'dev/js/**/*.js',
// scss
  'scssDest'  : 'dev/scss',
  'scssFiles' : 'dev/scss/**/*.scss',
// css
  'cssDest'   : 'public/css',
// scss
  'jadeDest'  : 'public/',
  'jadeFiles' : 'dev/jade/**/*.jade'
}

/***************************************************************************
* browser-sync
***************************************************************************/

// Local server
// gulp.task('browser-sync', function() {
//      browserSync({
//           proxy: paths.vhost,
//           open: 'external'
//      });
// });

// Static server
gulp.task('browser-sync', function() {
  browserSync({
    server: {
      baseDir: paths.dest
    },
    startPath: paths.htmlDest
  });
});

// Reload all browsers
gulp.task('bs-reload', function() {
  browserSync.reload()
});

/***************************************************************************
* image tasks
***************************************************************************/

gulp.task('sprite', function() {
  var spriteData = gulp.src(paths.imgDir + '/sprite/*.png')
  .pipe(sprite({
    imgName: 'sprite.png',
    imgPath: '/' + paths.imgDest + '/sprite.png',
    cssName: '_module-sprite.scss'
  }));
  spriteData.img.pipe(gulp.dest(paths.imgDest));
  spriteData.css.pipe(gulp.dest(paths.scssDest + '/module'));
});

/***************************************************************************
* js tasks
***************************************************************************/

gulp.task('jsLib', function() {
  return gulp.src(paths.jsFiles)
    .pipe(concat('lib.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.jsDest))
    .pipe(browserSync.reload({ stream: true }));
});

/***************************************************************************
* Sass tasks
***************************************************************************/

gulp.task('rubySass', function () {
    gulp.src(paths.scssFiles)
        .pipe(plumber())
        .pipe(rubySass({
          r: 'sass-globbing',
          'sourcemap=none': true
        }))
        .pipe(autoprefixer("last 2 version"))
        .pipe(gulp.dest(paths.cssDest))
        .pipe(reload({ stream: true }));
});


/***************************************************************************
* jade
***************************************************************************/

gulp.task('jade', () => {
    return gulp.src(paths.jadeFiles)
        .pipe(jade({
            pretty: true
        }))
        .pipe(gulp.dest('public/'));
});

/***************************************************************************
* gulp tasks
***************************************************************************/

gulp.task('watch', function() {
  gulp.watch([paths.imgDest + '/sprite/*.png'], ['sprite']);
  gulp.watch([paths.htmlFiles], ['bs-reload']);
  gulp.watch([paths.jsFiles], ['jsLib']);
  gulp.watch([paths.scssFiles], ['rubySass']);
  gulp.watch([paths.jadeFiles], {interval: 500}, ["jade"]);
});

gulp.task('default', [
    'browser-sync',
    'bs-reload',
    'jsLib',
    'rubySass',
    'sprite',
    'jade',
    'watch'
]);
