module.exports = function(grunt) {
  grunt.initConfig({
    exec: {
      get_grunt_sitemap: {
         command: 'curl --silent --output sitemap.json http://localhost/growbydata-website-wp/?show_sitemap'
      }
    },
    uncss: {
      dist: {
        options: {
          ignore: [/\w\.in/,
                    ".fade",
                    ".collapse",
                    ".collapsing",
                    /(#|\.)navbar(\-[a-zA-Z]+)?/,
                    /(#|\.)dropdown(\-[a-zA-Z]+)?/,
                    /(#|\.)(open)/,
                    ".modal",
                    ".modal.fade.in",
                    ".modal-dialog",
                    ".modal-document",
                    ".modal-scrollbar-measure",
                    ".modal-backdrop.fade",
                    ".modal-backdrop.in",
                    ".modal.fade.modal-dialog",
                    ".modal.in.modal-dialog",
                    ".modal-open",
                    ".in",
                    ".modal-backdrop",
                    /expanded/,/js/,/wp-/,/align/,/admin-bar/],
            stylesheets  : [
            '/assets/dist/bootstrap/css/bootstrap.min.css', 
            'style.css',
            '/assets/css/minified/main.css',
            '/assets/css/minified/media.css',
            '/assets/css/minified/home.css',
            '/assets/css/minified/search.css',
            '/assets/css/minified/all.css'
            ],
            ignoreSheets : [/fonts.googleapis/,/js.hsforms.net/,/require.js/],
            urls         : ["http://localhost/growbydata-website-wp/"], //Overwritten in load_sitemap_and_uncss task
          },
        // files: {
        //   'assets/compiled/style.css': ['http://localhost/growbydata-website-wp/']
        // },
         files: {
          'clean.css': ['**/*.html']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-exec');
  grunt.loadNpmTasks('grunt-uncss');
 

  grunt.registerTask('load_sitemap_json', function() {
    var sitemap_urls = grunt.file.readJSON('./sitemap.json');
    grunt.log(sitemap_urls);
    grunt.config.set('uncss.dist.options.urls', sitemap_urls);
  });

  grunt.registerTask('deploy',
  ['exec:get_grunt_sitemap','load_sitemap_json','uncss:dist']);
   
  

  grunt.registerTask('default', 'uncss');
}