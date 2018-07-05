var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: '/dist'
        }
    })
})

gulp.task('sass', function(){
    return gulp.src('./assets/sass/**/*.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('watch', ['browserSync', 'sass'],function() {
    gulp.watch('./assets/sass/**/*.scss', ['sass']);
});