module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          style: 'expanded',
        },
        files: {
          'unprefixed-style.css' : 'dev/sass/build.scss'
        }
      }
    },
    autoprefixer: {
      options: {
        map: true,
      },
      single_file: {
        src: 'unprefixed-style.css',
        dest: 'style.css',
      }
    },
    watch: {
      css: {
        files: 'dev/sass/*.scss',
        tasks: ['sass', 'autoprefixer'],
        options: {
          livereload: true,
        },
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass', 'autoprefixer', 'watch']);
};