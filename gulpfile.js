'use strict';

/************************/
/*  IMPORT DES PACKAGES */
/************************/

var gulp = require('gulp'),

    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    uncss = require('gulp-uncss'),
    rename = require("gulp-rename"),

    argv = require('yargs').argv

    // Pas utilisé pour le moment jasmine = require('gulp-jasmine-node')
;

require('es6-promise').polyfill();

/************************/
/*        TACHES        */
/************************/

/*
*   Tâches pour compilation SASS du PortalBundle
*/

var input = 'sass/*.scss';

gulp.task('style', function () {
    gulp
        .src(input)
        .pipe(sourcemaps.init())

        .pipe(sass().on('error', sass.logError))

        .pipe(autoprefixer())
        .pipe(sourcemaps.write())

        .pipe(rename(function(path){
            path.dirname = path.dirname.replace('sass', 'css');

        }))

        .pipe(gulp.dest(function(file) {
            return file.base.replace('sass', 'css');
        }))
});

// Même tâche mais en watch
gulp.task('style:watch', function () {
    gulp.watch(input, ['style']);
});
