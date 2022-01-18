const { on } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

// compile scss into css
 function style(){
   //1. Where is the sass file
   return gulp.src('/var/www/html/the_wire/web/themes/custom/the_wire/sass/**/*.scss')
   //2. pass that file through sass compiler
   .pipe(sass().on('error', sass.logError))
   //3. where do i save the compiled css?
   .pipe(gulp.dest('/var/www/html/the_wire/web/themes/custom/the_wire/css'))
   .pipe(browserSync.stream());

 }
   gulp.task('watch', async function() {
    gulp.watch('./assets/sass/*.scss', gulp.series('sass'));
  });
 function watch(){
   gulp.watch('/var/www/html/the_wire/web/themes/custom/the_wire/sass/**/*.scss', style)
   gulp.watch('/var/www/html/the_wire/web/themes/custom/the_wire/*.html').on('change', browserSync.reload);
   gulp.watch('/var/www/html/the_wire/web/themes/custom/the_wire/js/**/*.js')
 }

 exports.style = style;
 exports.watch = watch;
