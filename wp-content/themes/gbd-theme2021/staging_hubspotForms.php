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
		case 'Talk to expert footer Form':
		echo '{
			portalId: "5372895",
			formId: "d2eb5e21-2c81-4365-8987-3c3bf0b0f0ce",
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

			case 'Talk to an Expert Popup':
			echo '{
				portalId: "5372895",
				formId: "77386c99-96d9-4b2f-82ee-45d96ea48ed5",
				onFormSubmit: function($form) {
					dataLayer.push({
						"event": "talk to expert"
						}); 
					}
				}';
				break;
				case 'Talk to Expert Form':
				echo '{
					portalId: "5372895",
					formId: "8583e91d-d1f0-4524-b85e-e533fd5090b0",
					onFormSubmit: function($form) {
						sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
						dataLayer.push({
							"event": "new_talk_to_expert_submited"
							}); 
						}
					}';
					break;
					case 'Landing Page Form':
					echo '8696b50b-9900-428f-b2a9-18ea22390217';

					break;
				case 'Marketplace Intelligence Report Form':
				echo '7951431c-cad7-4dfc-97b4-5886ac715933';

					break;
					case 'Shoper-journey Page Form':
					echo 'fe0d7d51-f64e-4eff-b733-aa905d9ca2ce';

					break;
					case 'Unified Marketing Intel Page Form':
					echo '579d3190-8fdb-4b1b-87f0-49c7e7289da5';
					break;
					case 'Search Tunnel Vision for brands Form':
					echo 'cc428d7b-7dd5-49de-8363-3e2879c9fc6f';
					break;


					case 'Download guide form':
					echo 'd12e650e-4709-47d0-97ec-8ba938fc3b93';
					
						break;
						case 'Download PDF Form':
						echo 'db7408bc-c4aa-4238-85ed-eb51a7506a55';
						break;
						case 'Latest Special Offer Form':
						echo 'b278a5bf-bf68-4453-afc8-1f53974b7f76';
						break;

						case 'Shoppers attribute download form':
						echo 'd09ff14d-b5e2-4df5-bcd0-5e5543344041';
						break;
						default:
						echo "Form Not Found";
						break;
						case 'Schedule a demo solutions page':
						echo '1beafb51-bc5a-4bc9-b124-ea736193e918';
						break;
						case 'Share of Voice Landing page form':
						echo 'a0c1b3c6-d2a1-47b8-bfad-b632d16f7422';
						break;

					}




					?>