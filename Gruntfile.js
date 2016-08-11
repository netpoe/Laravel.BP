/*!
 * EBM Gruntfile
 * http://soygus.com
 * @author MadeByGus (GIT: netpoe)
 */

'use strict';

/**
 * Grunt module
 */
module.exports = function (grunt) {

  // Dynamically load npm tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  // EBM Grunt config
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    project: {
      src: 'resources/assets/EBM/src/scss',
      dest: 'public/css',
      css: [ '<%= project.src %>/style.scss' ],
      ebm: [ '<%= project.src %>/ebm.scss' ],
    },

    /**
     * Compile Sass/SCSS files
     * https://github.com/gruntjs/grunt-contrib-sass
     * Compiles all Sass/SCSS files and appends project banner
     */
    sass: {
      ebm: {
        options: {
          style: 'expanded'
        },
        files: {
          '<%= project.dest %>/ebm.css': '<%= project.ebm %>'
        }
      },
      dev: {
        options: {
          style: 'expanded'
        },
        files: {
          '<%= project.dest %>/style.css': '<%= project.css %>'
        }
      },
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          '<%= project.dest %>/style.min.css': '<%= project.src %>/style.min.scss'
        }
      }
    },

    /**
     * Runs tasks against changed watched files
     * https://github.com/gruntjs/grunt-contrib-watch
     * Livereload the browser once complete
     */
    watch: {
      style: {
        files: [
          '<%= project.src %>/style.scss',
          '<%= project.src %>/b3/_variables.scss',
          '<%= project.src %>/EBM/_ebm-global.scss'],
        tasks: 'sass:dev'
      },
      ebm: {
        files: [
          '<%= project.src %>/ebm.scss',
          '<%= project.src %>/{,*/}*/{,*/}*.{scss,sass}',
          '<%= project.src %>/third-party/{,*/}*.{scss,sass}',
          '!<%= project.src %>/style.scss',
          '!<%= project.src %>/EBM/_ebm-global.scss'],
        tasks: 'sass:ebm'
      }
    }
  });

  // Default task
  grunt.registerTask('default', [
    'watch'
  ]);

};