  <div class="container py-2">
               <div class="gbd-talk-to-expert-form gbd-talk-toexpert-sol">
                  <h2 class="text-center">Schedule a Free Demo</h2>
                  <div id="gbd-talk-to-expert-hb-form" class="contact-form gbd-talk-to-expert-hb-form gbd-talkto-expert-solution"> 
                         <script>

                     function HubspotFormLoad(file) {
                      var script = document.createElement("script");
                      script.type = "text/javascript";
                      script.charset = "utf-8";
                      script.defer = true;
                      script.src = file;
                      script.onload = function() {
                              //for download PDF
                              if (document.querySelectorAll("#gbd-talk-to-expert-hb-form .hbspt-form").length == 0) {
                                  // console.log("download pdf form");
                                  var script1 = document.createElement("script");
                                  script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Schedule a demo solutions page')); ?>'})";
                                  document.getElementById("gbd-talk-to-expert-hb-form").appendChild(script1);
                                }
                              };
                              document.body.appendChild(script);
                            }
                     setTimeout(function() {
                      HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                     }, 3000);
                   </script>
                 
                  </div>
               

               </div>
                </div>