module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        cmq: {
            your_target: {
                files: {
                    'stylesheet':['./style.css']
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-combine-media-queries');

    // Default task(s).
    grunt.registerTask('default', ['cmq']);

};