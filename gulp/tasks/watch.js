var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function(){

    browserSync.init({
        server: {
            baseDir: "public"
        },
        notify: false
    });

    watch('./public/*.html', function(){
        browserSync.reload();
    });

    watch('./app/assets/styles/**/*.css', function(){
        gulp.start('cssInject');
    });

    watch('./app/assets/scripts/**/*.js', function(){
        gulp.start('scriptsRefresh');
    });
});

gulp.task('scriptsRefresh', ['scripts'], function(){
    browserSync.reload();
});

gulp.task('cssInject', ['styles'],  function(){
    return gulp.src('./app/assets/styles/styles.css')
        .pipe(browserSync.stream());
});