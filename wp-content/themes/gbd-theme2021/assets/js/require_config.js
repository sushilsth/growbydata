requirejs.config({
	baseUrl: 'js',
	shim : {
        "bootstrap" : { "deps" :['jquery'] },
        "jquerymatchHeight" : { "deps" :['jquery'] }
    },
	paths:{
		jquery: "jquery",
		bootstrap: "bootstrap",
		jquerymatchHeight: "jquerymatchHeight",
		lazyload: "lazyload",
	}
})