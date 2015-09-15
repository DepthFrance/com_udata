module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    watch: {
      options: {
        livereload: true,
      },
      less: {
        files: ['**/*.less'],
        tasks: ['less:production'],
        options: {
          livereload: false
        }
      },
      css:{
        files: ['**/*.css',]
      },
      php: {
        files: ['**/*.php']
      }
    },



    less: {
      production: {
        options: {
          paths: ["less"]
        },
        files: {
          "main.css": "less/site.less"
        }
      }
    }



  });


grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-less');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};
