/**
 * @author Bilal Cinarli
 */

module.exports = {
    dist   : {
        src : [
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/jquery-colorbox/jquery.colorbox.js',
            'app/assets/scripts/vendors/prism.min.js',

            'app/assets/scripts/app/_app.js'
        ],
        dest: 'app/assets/scripts/<%= package.name %>.js'
    }
};