	jQuery(document).ready(function(){
		jQuery(document).on("click", "#hubspot_immediate_publish input[type=checkbox]", function(){
			if (this.checked) {
		        jQuery("#hubspot_immediate_publish").next("div").hide();
		    } else {
		        jQuery("#hubspot_immediate_publish").next("div").show();
		    }
		});

	});