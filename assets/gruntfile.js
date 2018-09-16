// gruntfile.js
module.exports = function(grunt) {

  require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // LESS to CSS Block
    less: {
      atf: {
        options: {
          paths: ['styles/less/atf'], // watch this folder
          report: true // report in the terminal what you did
        },

        files: {
          'styles/less/sanfran17.atf.css' : 'styles/less/atf/combined-atf.less' // create a css file out of the given less file
        }
      },

      main: {
        options: {
          paths: ['styles/less/main'],
          report: true
        },

        files: {
          'styles/less/sanfran17.css' : 'styles/less/main/combined.less'
        }
      }
    },

    // Autoprefixer Block
    autoprefixer: {
      atf: {
        options: {
          browsers: ['last 3 versions', '> 1%']
        },

        files: {
          'styles/sanfran17.atf.css' : 'styles/less/sanfran17.atf.css'
        }
      },

      main: {
        options: {
          browsers: ['last 3 versions', '> 1%']
        },

        files: {
          'styles/sanfran17.css' : 'styles/less/sanfran17.css'
        }
      }
    },

    // CSS Minifier Block
    cssmin: {
      atf: {
        src: 'styles/sanfran17.atf.css',
        dest: 'styles/sanfran17.atf.min.css'
      },

      main: {
        src: 'styles/sanfran17.css',
        dest: 'styles/london18.css'
      }
    },

    // Watch Block
    watch: {
      atf: {
        files: ['styles/less/atf/*.less'], // watch all .less files for changes
        tasks: ['atf-less'] // when changes -> do all defined tasks (see grunt.registerTask 'lessy')
      },

      main: {
        files: ['styles/less/main/*.less'], // watch all .less files for changes
        tasks: ['main-less'] // when changes -> do all defined tasks (see grunt.registerTask 'lessy')
      }
    }


  });

  grunt.registerTask('default', []);
  grunt.registerTask('atf-less', ['less:atf', 'autoprefixer:atf', 'cssmin:atf']);
  grunt.registerTask('main-less', ['less:main', 'autoprefixer:main', 'cssmin:main']);
}
