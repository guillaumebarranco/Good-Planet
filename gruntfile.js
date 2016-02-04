'use strict';

module.exports = function (grunt) {

    if(grunt.cli.tasks[0] && grunt.cli.tasks[0].indexOf("release") > -1) {
        grunt.loadNpmTasks('grunt-git-release');
    }
};