/**
 * @author Bilal Cinarli
 */

module.exports = {
    dist: {
        options: {
            style: 'compressed',
            sourcemap: 'none'
        },
        files  : {
            'app/assets/styles/styles.css': 'app/assets/styles-sass/styles.scss'
        }
    },
    dev : {
        options: {
            style    : 'nested'
        },
        files  : {
            'app/assets/styles/styles.dev.css': 'app/assets/styles-sass/styles.scss'
        }
    }
};