/**
 * @author Bilal Cinarli
 */

module.exports = {
    dev: {
        options: {
            proxy    : 'http://os/htmlmag/',
            files    : ['app/assets/styles/*.css', 'app/assets/scripts/<%= package.name %>.min.js', 'app/assets/images/*'],
            watchTask: true
        }
    }
};