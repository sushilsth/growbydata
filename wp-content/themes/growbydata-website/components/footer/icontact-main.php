<div id="maillist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="maillistLabel">
    <div class="modal-dialog gbd-pop-block" role="document">
        <div class="modal-content">
            <!-- Code added for icontact starts here -->
            <script type="text/javascript" src="//app.icontact.com/icp/static/form/javascripts/validation.js"></script>
            <script type="text/javascript" src="//app.icontact.com/icp/static/form/javascripts/tracking.js"></script>
            <link rel="stylesheet" type="text/css" href="//app.icontact.com/icp/static/human/css/signupBuilder/formGlobalStyles.css">

            <style type="text/css" id="signupBuilderAdvancedStyles"></style>
            <style type="text/css" id="signupBuilderStyles">
                #ic_signupform .elcontainer {
                    background: #333333;
                    text-align: left;
                    max-width: 450px;
                    border-radius: 0px;
                    border: 1px none #acacac;
                    font-size: 24px;
                    color: #5a5a5e;
                    font-family: tahoma;
                }

                #ic_signupform .elcontainer.center-aligned .formEl {
                    margin-right: auto;
                    margin-left: auto;
                }

                #ic_signupform .elcontainer.right-aligned .formEl {
                    margin-left: auto;
                }

                #ic_signupform .form-header {

                    background: #333333;
                    margin-top: -36px;
                    margin-left: -36px;
                    margin-right: -36px;
                    margin-bottom: 0px; /* using padding on purpose */
                    padding-top: 36px;
                    padding-right: 36px;
                    padding-bottom: 5px;
                    padding-left: 36px;
                    border-radius: calc(0px - 1px) calc(0px - 1px) 0 0;
                    text-align: center;
                    font-size: 60%;
                    color: #ffffff;
                }

                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-input label,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-dropdown label,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-input label,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-dropdown label,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
                    width: 30%;
                }

                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
                    line-height: 3.3529411764705883em;
                }

                #ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-checkbox h3,
                #ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-checkbox h3 {
                    line-height: 2.235294117647059em;
                }

                #ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-checkbox h3,
                #ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-checkbox h3 {
                    line-height: 4.470588235294118em;
                }

                #ic_signupform .elcontainer.inline-label-left .formEl input[type="text"],
                #ic_signupform .elcontainer.inline-label-left .formEl select,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio .option-container,
                #ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox .option-container,
                #ic_signupform .elcontainer.inline-label-right .formEl input[type="text"],
                #ic_signupform .elcontainer.inline-label-right .formEl select,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio .option-container,
                #ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox .option-container {
                    width: 70%;
                }

                #ic_signupform .elcontainer.hidden-label .formEl.required:before {
                    color: #ffffff;
                }

                #ic_signupform .elcontainer .formEl {
                    font-size: 1em;
                }

                #ic_signupform .elcontainer .formEl.fieldtype-input label,
                #ic_signupform .elcontainer .formEl.fieldtype-dropdown label,
                #ic_signupform .elcontainer .formEl.fieldtype-radio h3,
                #ic_signupform .elcontainer .formEl.fieldtype-checkbox h3 {
                    font-size: 85%;
                    font-weight: bold;
                    color: #ffffff;
                }

                #ic_signupform .elcontainer .formEl.fieldtype-input input[type="text"],
                #ic_signupform .elcontainer .formEl.fieldtype-dropdown select {
                    background-color: #f5f5f5;
                    border: 1px solid #e7e7e7;
                    border-radius: 0px;
                }

                #ic_signupform .elcontainer .formEl.fieldtype-input input[type="text"],
                #ic_signupform .elcontainer .formEl.fieldtype-dropdown select,
                #ic_signupform .elcontainer .formEl.fieldtype-radio label,
                #ic_signupform .elcontainer .formEl.fieldtype-checkbox label {
                    font-size: 95%;
                }

                #ic_signupform .elcontainer .formEl input[type="text"]::-moz-placeholder {
                    color: #555 !important;
                    font-weight: bold;
                    font-family: inherit;
                    font-size: 14px;
                    font-style: normal;
                    line-height: 40px;
                    padding: 6px 12px;
                    text-transform: capitalize;
                }

                #ic_signupform .elcontainer .formEl input[type="text"]::-webkit-input-placeholder {
                    color: #555 !important;
                    font-family: inherit;
                    font-weight: bold;

                    font-size: 14px;
                    font-style: normal;
                    line-height: 40px;
                    padding: 6px 12px;
                    text-transform: capitalize;
                }

                #ic_signupform .elcontainer .formEl input[type="text"] {
                    color: #555 !important;
                    font-weight: 400 !important;
                    font-family: inherit;
                    font-size: 14px !important;
                    height: 50px !important;
                    line-height: 40px !important;
                    padding: 6px 12px !important;
                }

                #ic_signupform .elcontainer .formEl input[type="text"]:-ms-input-placeholder {
                    color: #555 !important;
                    font-weight: 400;
                    font-family: inherit;
                    font-size: 14px !important;
                    line-height: 40px;
                    padding: 6px 12px;
                    text-transform: capitalize;
                }

                #ic_signupform .elcontainer .formEl input[type="text"]:focus {
                    border-color: #af0000;
                    -webkit-box-shadow: 0 1px 3px #fda9a9;
                    -moz-box-shadow: 0 1px 3px #fda9a9;
                    box-shadow: 0 1px 3px #fda9a9;
                }

                #ic_signupform .elcontainer .formEl input[type="text"],
                #ic_signupform .elcontainer .formEl select,
                #ic_signupform .elcontainer .formEl .option-container label {
                    color: #ffffff;
                    font-family: inherit;
                }

                #ic_signupform .elcontainer.inline-button .submit-container {
                    display: inline-block;
                    box-sizing: border-box;
                    right: -.5em;
                    padding: 0 1em 0 0;
                    position: relative;
                    vertical-align: bottom;
                    margin-bottom: 1em;
                }

                #ic_signupform .elcontainer.inline-button.tight .sortables {
                    margin-bottom: -.5em;
                }

                #ic_signupform .elcontainer.inline-button .sortables {
                    margin-bottom: -1em;
                }

                #ic_signupform .elcontainer.inline-button.generous .sortables {
                    margin-bottom: -1.5em;
                }

                #ic_signupform .elcontainer .submit-container {
                    text-align: left;
                }

                #ic_signupform .elcontainer .fieldtype-checkbox, .option-container label {
                    text-align: left
                }

                #ic_signupform .elcontainer .form-header h3 {
                    font-size: 30px;
                    font-weight: 600;
                    line-height: 37px;
                    margin: 0;
                    text-align: center;
                }

                #ic_signupform .elcontainer .submit-container input[type="submit"] {
                    background: #d12222;
                    border: 0px solid #e7ce4d;
                    border-radius: 4px;
                    padding: 20px 25px;
                    color: #ffffff;
                    font: 15px 'Ubuntu', sans-serif;
                    text-transform: uppercase;
                    width: auto;
                    font-weight: 500;
                    height: 49px;
                    line-height: 13px;

                }

                .fieldtype-checkbox h3 {
                    text-align: left !important;
                    display: inline !important;
                }

                .option-container label {
                    font-size: 14px !important
                }

                #ic_signupform .elcontainer .formEl.fieldtype-input input[type="text"], #ic_signupform .elcontainer .formEl.fieldtype-dropdown select {
                    background-color: #f5f5f5;
                    border: 1px #999999 solid;
                    border-radius: 0;
                    -moz-border-radius: 0;
                    -webkit-border-radius: 0;
                    height: 50px;
                }

                #ic_signupform .elcontainer.tight .submit-container {
                    padding-top: 0 !important
                }

                #ic_signupform .elcontainer.tight .submit-container {
                    margin: 0 !important;
                    padding: 0 0 0 8px !important;
                }</style>

            <form id="ic_signupform" method="POST" action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=23&cid=447956&lid=21338">
                <div class="elcontainer tight hidden-label left-aligned">
                    <div class="form-header">
                        <h3>Don't miss a thing</h3>
                        <label>Join the GrowByData mailing list today.</label>
                    </div>
                    <div class="sortables">
                        <div class="formEl fieldtype-input required" data-validation-type="1" data-label="Email"
                             style="display: block; width: 100%;">
                            <label>Email</label><input type="text" placeholder="your email address" name="data[email]">
                        </div>
                        <label for="fields_email" class="error" style="display:none">Please enter your email address</label>
                        <div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Please select one" style="display: inline-block; width: 100%;">
                            <h3>Please select one<span class="indicator required">*</span></h3>
                            <div class="option-container">
                                <label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="53315">Potential Client</label>
                                <label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="53316">Potential Team Member</label>
                                <label class="checkbox"><input type="checkbox" alt="Lists" name="data[listGroups][]" value="53317">Others</label>
                            </div>
                        </div>
                        <div class="submit-container">
                            <input type="submit" value="Sign up" class="btn btn-submit">
                        </div>
                    </div>
                    <div class="hidden-container"></div>
                </div>
            </form>
            <img src="//app.icontact.com/icp/core/signup/tracking.gif?id=23&cid=447956&lid=21338"/>
            <!-- Code added for icontact ends here -->
        </div>
    </div>
</div>