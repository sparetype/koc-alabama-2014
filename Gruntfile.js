module.exports = function(grunt) {
// Project configuration.
grunt.initConfig({
pkg: grunt.file.readJSON('package.json'),
concat: {
dist: {
src: ['src/js/*.js' // All JS in the src folder
],
dest: 'src/js/production.js',
}
},
uglify: {
build: {
src: 'src/js/production.js',
dest: 'knights2015/scripts/production.min.js'
}
},
sass: {
build: {
options: {
style: 'compressed'
},
files: {
'knights2015/css/template.css': 'src/sass/template.scss'
}
}
}
});
// Load the plugin that provides the "uglify" task.
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-sass');
// Default tasks.
grunt.registerTask('default', ['concat', 'uglify', 'sass']);
};