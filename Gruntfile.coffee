module.exports = (grunt) ->
    grunt.initConfig
        pkg: grunt.file.readJSON 'package.json'
        compass:
            dev:
                options:
                    httpPath: ''
                    cssDir: '.'
                    sassDir: 'src/sass'
                    imagesDir: 'assets/img'
                    importPath: 'bower_components'
                    relativeAssets: true
                    watch: true
            dist:
                options:
                    environment: 'production'
                    httpPath: ''
                    cssDir: '.'
                    sassDir: 'src/sass'
                    imagesDir: 'assets/img'
                    importPath: 'bower_components'
                    relativeAssets: true
                    force: true
        uglify:
            options:
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
                        '<%= grunt.template.today("yyyy-mm-dd") %> */'
                mangle:
                    except: ['jQuery']
            plugins:
                files: [
                    'assets/js/plugins.js': [
                        'src/js/plugins.js'
                        'bower_components/foundation/js/foundation.js'
                        'bower_components/momentjs/moment.js'
                        'bower_components/Morphist/dist/morphist.js'
                    ]
                ]
            application:
                files:
                    'assets/js/application.js': ['src/js/application.js']

    grunt.loadNpmTasks 'grunt-contrib-compass'
    grunt.loadNpmTasks 'grunt-contrib-uglify'

    grunt.registerTask 'default', ['uglify', 'compass:dist']
    grunt.registerTask 'dev', ['compass:dev']