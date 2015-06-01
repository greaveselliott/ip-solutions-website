module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cmq: {
            options: {
                log: true
            },
            your_target: {
                files: {
                    'stylesheet':['./style.css']
                }
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: './',
                    src: ['*.css', '!*.min.css'],
                    dest: './',
                    ext: '.css'
                }]
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-combine-media-queries');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    // Default task(s).
    grunt.registerTask('default', ['cmq']);

};
