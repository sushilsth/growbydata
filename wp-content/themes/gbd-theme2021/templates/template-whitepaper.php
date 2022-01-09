<?php
/*
Template Name: Whitepaper Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style-new.css?q='. $eci_date->getTimestamp() ; ?>">

<div class="gbd-default-template gbd-infographics-template gbd-whitepaper-template">
    <div class="gbd-infographics-wrapper gbd-whitepaper-wrapper light-background">
        <div class="gbd-infographics">
          <?php the_title('<h1 class="page-title text-center">', '</h1>'); ?>
          <?php if (have_rows('gbd_whitepaper_block')): ?>  
            <div class="container">    
                <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
                    <?php $i = 0; ?>
                    <?php while (have_rows('gbd_whitepaper_block')): the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $link = get_sub_field('link');
                        ?>
                        <div class="col-md-4 col-xs-12">
                            <div class="gbd-infographics-block">
                                <div class="gbd-infographics-img">
                                    <a data-toggle="modal" data-target="#myModal" id="Download-guide-form-popup">         
                                        <img class="w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" data-target="#carouselExample" data-slide-to="<?php echo $i; ?>"/>
                                    </a>
                                </div>
                                <div class="gbd-infographics-info">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" >
                                        <?php echo $name; ?>
                                    </a>
                                </div>
                                    <div style="display: none;" class="Whitepaper-pdf-download-links">
                                       
                                            <?php echo $link["url"]; ?>
                                        
                                    </div>
                                    <div style="display: none;" class="Whitepaper-pdf-title">
                                       
                                            <?php echo $link["title"]; ?>
                                        
                                    </div>
                                </div>
                            </div>                            
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>            
        </div><!-- gbd-Whitepaper -->

        <!-- Modal -->
        <div class="modal fade Download-guide-form" id="myModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Download Guide</h4>                     
                  <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
              <div class="modal-body">

                <div id="Download-guide-popup-form">
                                        <script>
                                          var Whitepaperlink, WhitepaperTitle;
                      var downloadPDF = function(){
                        console.log(Whitepaperlink);
                        a = document.createElement("a");
                            a.href =  Whitepaperlink, a.download = WhitepaperTitle, document.body.appendChild(a), a.click(), document.body.removeChild(a);

                            dataLayer.push({
                                        "event": "landing_page_submited"
                                      }); 

                            setTimeout(function(){
                              window.location.reload();
                            },1000);
                      };
                    </script>
                    <script>

                     function HubspotFormLoad(file) {
                      var script = document.createElement("script");
                      script.type = "text/javascript";
                      script.charset = "utf-8";
                      script.defer = true;
                      script.src = file;
                      script.onload = function() {
                              //for download PDF
                              if (document.querySelectorAll("#Download-guide-popup-form .hbspt-form").length == 0) {
                                  // console.log("download pdf form");
                                  var script1 = document.createElement("script");
                                  script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Download guide form')); ?>',onFormSubmit: downloadPDF})";
                                  document.getElementById("Download-guide-popup-form").appendChild(script1);
                                }
                              };
                              document.body.appendChild(script);
                            }
                     setTimeout(function() {
                      HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                     }, 5000);
                   </script>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- End Section -->


</div><!-- gbd-Whitepaper-wrapper --> 

</div><!-- gbd-default-template -->

<?php
get_footer();