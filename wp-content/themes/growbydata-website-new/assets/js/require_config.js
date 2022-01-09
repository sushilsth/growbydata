requirejs.config({
	// baseUrl: site_url + "/wp-content/themes/growbydata-website-new/assets",
	baseUrl: template_dir_uri,
	shim : {
        "bootstrap" : { "deps" :['jquery'] },
        "slickslider" : { "deps" :['jquery'] },
        "matchheight" : { "deps" :['jquery'] },
        "jqueryvalidate" : { "deps" :['jquery'] },
    },
	paths:{
		// jquery: "js/jquery",
		jquery: "https://d1giulg0kzu6r6.cloudfront.net/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp",
		bootstrap: "lib/bootstrap/js/bootstrap.minified",
		lazyload: "lib/vanilla-lazyload-17.1.0/lazyload.min",
		slickslider: "lib/slick/js/slick.min",
		matchheight: "lib/jquery-match-height/jquery.matchHeight.min",
		jqueryvalidate: "js/jqueryvalidate"
	}
})

// requirejs.config({
// 	baseUrl: "",
// 	shim : {
//     },
// 	paths:{
// 		jquery: "jquery",
// 	}
// })