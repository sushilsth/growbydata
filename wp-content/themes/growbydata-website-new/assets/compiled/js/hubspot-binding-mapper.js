/*Auther: 
Version: v1
Description: extension of select2 jQuery library and Hubspot fields mapping
*/
// jQuery(document).ready(function($) {

	var checkboxToSelect = {
		bake : function(checkboxContainerSelector, checkboxName, formSelector, placeholder, selectBoxPositionToAppend){
			console.log("baked..");
			//hide the original checkbox
			jQuery(checkboxContainerSelector).hide();

			var selectID = "sushi_"+Math.floor((Math.random() * 10) + 1);

			//create selectbox element
			// var selectBoxOpen = "<select style='display:none;' name="+ jQuery("input[type=checkbox][name="+checkboxName+"]")[0].name +" id='"+ selectID +"'  multiple='multiple'>";
			var selectBoxOpen = "<select style='display:none;' id='"+ selectID +"'  multiple='multiple'>";
			var selectBoxClose = "</select>";

			//create selectbox options
			var options = "";
			jQuery("input[type=checkbox][name="+checkboxName+"]").each(function(){
				options += "<option value='"+ jQuery(this).attr("value") +"'>"+ jQuery(this).next("span").text() +"</option>";
			})

			// create the selectbox
			jQuery(selectBoxPositionToAppend).before(selectBoxOpen + options + selectBoxClose);

			//make the selectBox selected if the checkbox was checked in progressive profiling
			var favorite = [];
            jQuery.each(jQuery("input[type=checkbox][name="+checkboxName+"]:checked"), function(){
                favorite.push(jQuery(this).val());
            });
			jQuery("#"+selectID).val(favorite);
			
			//bind change on custum created select element
			jQuery(document).on("change","#"+selectID,function(){
				setTimeout(function(){
					var selectedVal = [];
					jQuery.each(jQuery("#"+ selectID +" option:selected"), function(){            
			            selectedVal.push(jQuery(this).val());
			        });
					jQuery("input[type=checkbox][name="+checkboxName+"]").prop("checked", false);
					var selectedValLen = selectedVal.length;
					if(selectedValLen){
						for(var i=0;i<selectedValLen;i++){
							console.log(selectedVal[i]);
	                        jQuery("input[type=checkbox][name="+checkboxName+"][value='"+selectedVal[i]+"']").prop("checked", true);
	                    }
	                }
				},500);
			})

			//select2 plugin initialization
			jQuery("#"+selectID).select2({
			    placeholder: placeholder,
			    allowClear: true
			});
	    
		},
		mapCustumFieldToDefaultField: function(mapDefault, mapCustom){

			//check if default field is empty and if yes then two way binding in default and custom field
			var mapDefaultLen = mapDefault.length;
			for(var e=0;e<mapDefaultLen;e++){
				var obj = mapDefault[e];
				var obj2 = mapCustom[e];
			  	if(obj.type == "text" && obj2.type == "select"){
			  		(jQuery("select[name="+obj2.name+"]").val() == "") ? jQuery("select[name="+obj2.name+"]").val(jQuery("input[type=hidden][name="+obj.name+"]").val()).change() : "";
					jQuery("select[name="+obj2.name+"]").on("change",function(){
						(jQuery("input[type=hidden][name="+obj.name+"]").val() == "") ? jQuery("input[type=hidden][name="+obj.name+"]").val(jQuery(this).val()).change() : "";
					});
			  	} else if(obj.type == "select"){

			  	} else if(obj.type == "check"){

			  	}
			}
		},
		init: function(params){
			try{
				if(typeof hbspt != "undefined")
				this.bake(params.HS_checkboxContainer,params.HS_checkboxName, params.HS_formID, params.HS_checkboxPlaceholder, params.selectBoxPositionToAppend);
				if(params.hasOwnProperty('mapDefault') && params.hasOwnProperty('mapDefault') && (params.mapDefault.length == params.mapCustom.length)){
					this.mapCustumFieldToDefaultField(params.mapDefault, params.mapCustom);
				}
			} catch {
				if(jQuery("input[type=checkbox][name="+params.HS_checkboxName+"]").length == 0 && jQuery(params.HS_formID).length == 0)
				console.log("hubsport form ID or checkbox not found");
			}
		}
	}
// });
