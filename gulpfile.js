var gulp = require("gulp");
var clean = require("gulp-clean");
var sass = require("gulp-dart-sass");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require('gulp-sourcemaps');
var browsersync = require('browser-sync').create();

const paths = {
  styles: {
      src: "sass/**/*.scss",
      dest: "./",
  },
  scripts: {
      src: "js/working-js/**/*.js",
      dest: "js/compiled-js",
  },
};

// Compile SASS
gulp.task("sass", () => {
  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: "compressed"
      }).on("error", sass.logError)
    )
    .pipe(
      autoprefixer({
        cascade: false
      })
    )
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browsersync.reload({ stream: true }));
});

// Compile JS
gulp.task("js", () => {
  return gulp
    .src([
      "./js/working-js/scripts.js"
    ])
    .pipe(sourcemaps.init())
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.scripts.dest))
    .pipe(browsersync.reload({ stream: true }));
});

// Start App on Browser
gulp.task('browser-sync', () => {
  browsersync.init({
    proxy: "https://bonnie-raitt.local"
  });
});

// Clean output directory
gulp.task("clean", () => {
  return gulp.src(paths.scripts.dest + "/*", { read: false }).pipe(clean());
});

// Detect Changes
gulp.task("watch", () => {
  gulp.watch(paths.styles.src, gulp.series("sass"));
  gulp.watch(paths.scripts.src, gulp.series("js"));
  gulp.watch('./**/*.php').on('change', browsersync.reload);
  gulp.watch('*.html').on('change', browsersync.reload);
});

// Run Gulp Magic
gulp.task('default', gulp.series(gulp.parallel('sass', 'js', 'browser-sync', 'watch')));