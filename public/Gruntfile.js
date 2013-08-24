module.exports = function(grunt){

    grunt.initConfig({
        sass: {
            dist:{                  
                files: {              
                    'css/screen.css': 'sass/screen.scss' 
                },
            }
        },
        watch: {
            scripts: {
                files: '**/*.scss',
                tasks: ['sass'],
                options: {
                    interrupt: true,
                },
            },
        }                
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', 'sass');
}
