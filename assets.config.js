// widerep files for easier assets managment
// bundle.config.js
module.exports = {
    bundle: {
        main: {},
        vendor: {
            scripts: [
                // All vendor/3rd party js scripts
                './bower_components/jquery/dist/jquery.min.js', // Jquery basic
                './bower_components/velocity/velocity.min.js', // velocity.js for animation across the elements
                './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', // http://getbootstrap.com/
                './bower_components/velocity/velocity.ui.min.js', // velocity.ui.js for animation across the elements
                './bower_components/scrollToggle/scrollToggle.js' // Events on scroll
            ],
            options: {
                uglify: false, // don't minify js since bower already ships with one
                minCSS: false, // don't minify css since bower already ships with one
                rev: false
            }
        },
    }
};
