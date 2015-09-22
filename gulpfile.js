"use strict";

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var maps = require('gulp-sourcemaps');

var JS_SOURCE_DIR = 'js/';

gulp.task('concatScripts', function(){
	return gulp.src(['image_comparison_slider', 'footer'].map(function(file){return JS_SOURCE_DIR + file + '.js';}))
		.pipe(maps.init())
		.pipe(concat('app.js'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('./public/scripts'));
});

gulp.task('minifyScripts', ['concatScripts'], function(){
	return gulp.src('./public/scripts/app.js')
		.pipe(uglify())
		.pipe(rename('app.min.js'))
		.pipe(gulp.dest('./public/scripts'));
});
gulp.task('watchScripts', function(){
	gulp.watch('js/**/*.js', ['minifyScripts']);
});

gulp.task('build', ['minifyScripts']);
gulp.task('default', ['build']);
