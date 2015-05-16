/**
 * @author Bilal Cinarli
 */

'use strict';

// Include gulp
var gulp = require('gulp'),
    pkg = require('./package.json');

// Include Our Plugins
var jshint = require('gulp-jshint'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    header = require('gulp-header'),
    rename = require('gulp-rename');

var banner = [
    '/*! HTML Mag \n',
    ' *  <%= pkg.description %> \n',
    ' *  @author <%= pkg.author %> \n',
    '<% pkg.contributors.forEach(function(contributor) { %>',
    ' *          <%= contributor.name %> <<%=contributor.email %>> (<%=contributor.url %>)\n',
    '<% }) %>',
    ' *  @version <%= pkg.version %>\n',
    ' */\n'
].join('');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('app/assets/scripts/app/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('app/assets/styles-sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('app/assets/styles'))
        .pipe(sass())
        .pipe(rename('styles.dev.css'))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('app/assets/styles'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src([
        'bower_components/jquery/dist/jquery.min.js',
        'bower_components/jquery-colorbox/jquery.colorbox.js',
        'app/assets/scripts/vendors/prism.min.js',
        'app/assets/scripts/app/_app.js'
        ])
        .pipe(concat('htmlmag.js'))
        .pipe(gulp.dest('app/assets/scripts'))
        .pipe(rename('htmlmag.min.js'))
        .pipe(uglify())
        .pipe(header(banner, {pkg: pkg}))
        .pipe(gulp.dest('app/assets/scripts'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('app/assets/scripts/app/*.js', ['lint', 'scripts']);
    gulp.watch('app/assets/styles-sass/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);