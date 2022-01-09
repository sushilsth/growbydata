<?php
switch ($formName) {
	case 'Ad Intelligence Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "461d38a6-8027-446c-b1a3-ee28a86cc53e",
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
		formId: "60e8dd10-05c0-4c1b-bd5b-10b9fc337c81"
	}';
	break;
	case 'Ad Agency Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "4372a6d0-32fd-4e83-a67f-6de18791f3b0"
	}';
	break;
	case 'Blog Sign up Form':
	echo '{
		portalId: "5372895",
		formId: "266756a8-ab84-4f65-a325-df5ac2c0a741"
	}';
	break;
	case 'Our Pricing Form':
	echo '{
		portalId: "5372895",
		formId: "9d507821-0c72-48c9-98fb-6a10c4c0654f",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		} 
	}';
	break;
	case 'Free Price Report Form':
	echo '{
		portalId: "5372895",
		formId: "d56b7ec6-6058-4937-abf8-65a1a6459ad1",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		} 
	}';
	break;
	case 'Schedule Free Consultation Form':
	echo '{
		portalId: "5372895",
		formId: "4ada6b20-7ec7-4a03-a1f5-61e77b558c56",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Repricing Schedule Free Consultation Form':
	echo '{
		portalId: "5372895",
		formId: "59d73b36-33b9-42f4-ac6e-5209ea5d7964",
		onFormSubmit: function($form) {
			sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
		}
	}';
	break;
	case 'Schedule Free Consultation Form Home':
	echo '{
		portalId: "5372895",    
		formId: "f36d9b6d-12b6-486c-bd7e-44920b9b427e",
		onFormSubmit: function($form) {
			dataLayer.push({
	            "event": "talk_to_expert_submited"
	        }); 
		}
	}';
	break;
	case 'Download PDF Form':
	echo 'ed29ac9f-801b-4fc5-9b05-662e88bffb0c';
	break;
	default:
	echo "Form Not Found";
	break;
}
?>