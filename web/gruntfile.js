module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            sass: {
                files: ['sass/*.scss'],
                tasks: ['sass', 'cssmin']
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                    cacheLocation: '.cache/sass'
                },
                files: [{
                    expand: true,
                    cwd: 'sass',
                    src: ['*.scss'],
                    dest: '.cache/css/',
                    ext: '.css'
                }]
            }
        },
        cssmin: {
            my_target: {
                files: [{
                    expand: true,
                    cwd: '.cache/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'www/assets/c',
                    ext: '.min.css'
                }]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['sass', 'cssmin']);
};
