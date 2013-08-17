module.exports = function(grunt){

    grunt.initConfig({
        sass: {
            dist:{                  
                files: {              
                    'css/screen.css': 'sass/screen.scss' 
                },
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.registerTask('default', 'sass');
}
