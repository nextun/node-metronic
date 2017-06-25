var gulp = require('gulp'),
webpack = require('webpack');

gulp.task('scripts', function(callback){
    webpack(require('../webpack.config'), function(){
        console.log('Yay, webpack has run!!');
        callback();
    });
});