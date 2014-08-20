module.exports = function(grunt) {
// Project configuration.
grunt.initConfig({
pkg: grunt.file.readJSON('package.json'),
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
grunt.loadNpmTasks('grunt-contrib-sass');
// Default tasks.
grunt.registerTask('default', ['sass']);
};