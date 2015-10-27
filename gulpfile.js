'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var inject = require('gulp-inject');
var postcss = require('gulp-postcss');
var lost = require('lost');

gulp.task('sass', function(){
 var processors = [
  lost
 ];

 return gulp.src('public/styles/**/*.scss')
     .pipe(sass().on('error', sass.logError))
     .pipe(postcss(processors))
     .pipe(autoprefixer({browsers: ['last 2 version']}))
     .pipe(gulp.dest('public/styles/css'))
});

gulp.task('inject', function() {
 var sources = [
  'public/bower_components/**/*.min.js',
  'public/app/**/*.js',
  'public/styles/**/*.css',
  'public/bower_components/**/*.css'
 ];

 gulp.src('resources/views/index.php')
     .pipe(inject(gulp.src(sources, {read: false}), {ignorePath: 'public'}))
     .pipe(gulp.dest('resources/views'))
});

gulp.task('default', function() {
 gulp.run('inject');
 gulp.run('sass');

 var sources = [
  'public/bower_components/**/*.min.js',
  'public/app/**/*.js',
  'public/app/*.js',
  'public/styles/**/*.css'
 ];

 gulp.watch(sources, ['sass', 'inject'])

 //gulp.watch('js:watch');
 //gulp.watch('sass:watch');
});

gulp.task('sass:watch', function(){


 return gulp.watch(sources,
     ['sass']);
});

gulp.task('js:watch', function(){
 return gulp.watch([
      'public/bower_components/**/*.min.js',
      'public/app/**/*.js',
      'public/app/*.js'
     ],
     ['inject']);
});