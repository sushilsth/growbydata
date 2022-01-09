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
            ignore       : [/expanded/,/js/,/wp-/,/align/,/admin-bar/],
            stylesheets  : ['style.css','assets/css/stylesheets.css','assets/css/all.css','assets/media.min.css','assets/css/blog-css.css'],
            ignoreSheets : [/fonts.googleapis/],
            urls         : [], //Overwritten in load_sitemap_and_uncss task
          },
        // files: {
        //   'assets/compiled/style.css': ['http://localhost/growbydata-website-wp/']
        // },
         files: {
          'style.clean.css': ['**/*.php']
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-exec');
  grunt.loadNpmTasks('grunt-uncss');
 

  grunt.registerTask('load_sitemap_json', function() {
    var sitemap_urls = grunt.file.readJSON('./sitemap.json');
    grunt.config.set('uncss.dist.options.urls', sitemap_urls);
  });

  grunt.registerTask('deploy',
  ['exec:get_grunt_sitemap','load_sitemap_json','uncss:dist']);
   
  

  grunt.registerTask('default', 'uncss');
}