<?php
switch ($formName) {
	case 'Ad Intelligence Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "d62d3f50-592e-4b24-a167-a13926bf0f7f",
		onFormSubmit: function($form) {
			dataLayer.push({
	            "event": "ad_intelligence_signupForm_submited"
	        }); 
		}
	}';
	break;
	case 'Footer Subscribe':
	echo '{
		portalId: "5372895",
		formId: "7fd5d894-3b0b-456b-b680-74eefd24e133"
	}';
	break;
	case 'Ad Agency Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "1fc3a23c-e8e4-4824-ade6-ffa9dd4b7b0a"
	}';
	break;
	case 'Blog Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "19bb5af5-26d9-4fdc-993d-0fd91b5d5f7f"
	}';
	break;
	case 'Our Pricing Form':
	echo '{
		portalId: "5372895",
		formId: "c3d296b7-ec1b-4104-bb45-584bf417b62a",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Free Price Report Form':
	echo '{
		portalId: "5372895",
		formId: "c1df99ae-9f43-4722-938b-6da12b12017b",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Schedule Free Consultation Form':
	echo '{
		portalId: "5372895",
		formId: "7b4f50bb-031d-4974-a65e-96c627d26d52",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Repricing Schedule Free Consultation Form':
	echo '{
		portalId: "5372895",
		formId: "453a1f00-0a5c-46a0-960b-fd9be31f9c99",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Schedule Free Consultation Form Home':
	echo '{
		portalId: "5372895",    
		formId: "7bab58a5-344e-4901-8148-73665a6e2e93",
		onFormSubmit: function($form) {
			dataLayer.push({
	            "event": "talk_to_expert_submited"
	        }); 
		}
	}';
	
	break;
	case 'Download PDF Form':
	echo 'db7408bc-c4aa-4238-85ed-eb51a7506a55';
	break;
	default:
	echo "Form Not Found";
	break;
}
?>