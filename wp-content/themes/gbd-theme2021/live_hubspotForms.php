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
		case 'Talk to expert footer Form':
		echo '{
			portalId: "5372895",
			formId: "ed3e206d-b8de-4fca-b60e-06f485098065",
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
			case 'Talk to Expert Form':
			echo '{
				portalId: "5372895",
				formId: "021792bb-e1e7-4f3d-bef4-631a75738284",
				onFormSubmit: function($form) {
					sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
					dataLayer.push({
						"event": "new_talk_to_expert_submited"
						}); 
					}
				}';
				break;
				case 'Landing Page Form':
				echo 'bd8d47da-cd61-453b-9fed-cb0517e85a69';

				break;
				case 'Marketplace Intelligence Report Form':
				echo '0fe83da7-f608-4443-90ec-ebc1d851f534';

				break;
					case 'Shoper-journey Page Form':
					echo 'a32cc50e-f002-4468-bdf3-7551f8f62bf4';
					break;

					case 'Unified Marketing Intel Page Form':
					echo '5881d3fc-1cea-4c4e-9248-5aeed87313bf';
					break;

					case 'Search Tunnel Vision for brands Form':
					echo 'd1b25392-cd62-4208-9c19-56d1b9c72f48';
					break;

					case 'Download PDF Form':
					echo 'ed29ac9f-801b-4fc5-9b05-662e88bffb0c';
					break;

					case 'Latest Special Offer Form':
					echo '5e8dc897-4fa4-48b1-805d-a34586053a8f';

					break;
					case 'Download guide form':
					echo '64dc09b3-1984-4759-aa41-ed345b288482';

					break;

					case 'Shoppers attribute download form':
					echo 'f796ae23-7c3a-4fc2-95a6-25c7825792ae';
					break;
					
					default:
					echo "Form Not Found";
					break;
					
					case 'Schedule a demo solutions page':
					echo 'a5716172-7e0d-4379-b072-93d703b11c2c';
					break;

						case 'Share of Voice Landing page form':
					echo '901cacbf-bb8c-43ae-bb62-03ccde516887';
					break;

					}

				?>