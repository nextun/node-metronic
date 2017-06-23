var gulp = require('gulp'),
cssvars = require('postcss-simple-vars'),
postcss = require('gulp-postcss'),
autoprefixer = require('autoprefixer'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins');

gulp.task('styles', function(){
    return gulp.src('./app/assets/styles/styles.css')
        .pipe(postcss([cssImport, mixins, cssvars, nested, autoprefixer]))
        .on('error', function(e){
            console.log(e.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('./public/assets/styles'));
});