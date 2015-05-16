/**
 * @author Bilal Cinarli
 */

module.exports = {
    options: {
        banner: '/*! HTML Mag \n' +
              ' *  <%= package.description %> \n' +
              ' *  @author <%= package.author %> \n' +
              '<% package.contributors.forEach(function(contributor) { %>' +
              ' *          <%= contributor.name %> <<%=contributor.email %>> (<%=contributor.url %>)\n' +
              '<% }) %>' +
              ' *  @version <%= package.version %> \n' +
              ' *  @build <%= grunt.template.today("dd-mm-yyyy") %> \n' +
              ' */\n'
    },
    dev    : {
        files: {
            'app/assets/scripts/<%= package.name %>.min.js': ['<%= concat.dist.dest %>']
        }
    },
    dist   : {
        files: {
            'app/assets/scripts/<%= package.name %>.min.js': ['<%= concat.dist.dest %>']
        }
    }
};