/**
 * @author Bilal Cinarli
 */

module.exports = {
    css: {
        files: '**/*.scss',
        tasks: ['sass']
    },
    template: {
        files: ['templates/**/*.hbs'],
        tasks: ['handlebars']
    },
    js: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint', 'concat', 'uglify']
    }
};