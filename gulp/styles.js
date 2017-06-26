var gulp = require('gulp'),
postcss = require('gulp-postcss'),
postcssImport = require('postcss-import'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
mixins = require('postcss-mixins'),
nested = require('postcss-nested');

gulp.task('styles', function(){
    return gulp.src('./assets/styles/styles.css')
        .pipe(postcss([nested, cssvars, postcssImport, autoprefixer, mixins ]))
        .pipe(gulp.dest('./includes/styles'));
});

