<?php
/*
Template Name: Free Price Report Template
*
* @package Growbydata Site
* @since Growbydata Site 1.0.4
*/
?>
<?php get_header(); ?>
<style>
.page-template-template-Free-Price-report #ad-intelligence-insights .hs_email.hs-email.hs-fieldtype-text.field.hs-form-field {
    width: 100%;
    padding-left: 0px;
}
</style>
<div class="gbd-free-price-report-top-wrapper">
  <div class="gbd-content">
    <div class="container">
      <div class="gbd-inner-page-wrapper">
        <div class="gbd-free-price-report-top">
      <div class="gbd-default-title"><h1 class="page-title">Get Your Free Price Report</h1></div>
        <div class="gbd-free-price-report-text"><span><i class="fa fa-check-circle"></i>EASY</span> <span> <i class="fa fa-check-circle"></i> Fast</span> <span> <i class="fa fa-check-circle"></i> Free</span> </div> 
       </div>
     </div>
      </div>
 </div>
</div>

<div class="gbd-contact-us gbd-free-price-report">
  <!--BODY STARTS HERE-->
  <div class="gbd-content">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <header class="entry-header">
            <?php the_title('<h2 class="page-title">', '</h2>'); ?>
          </header>

          
          <div id="free_price_report" class="contact-form">
<!--       <?php //echo do_shortcode('[contact-form-7 id="902" title="Free Price Report"]'); ?>
 --> 
 <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
    hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Free Price Report Form")); ?>);
</script>          
<!--Live HubSpot -->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>

 <script>
  hbspt.forms.create({
  portalId: "5372895",
  formId: "d56b7ec6-6058-4937-abf8-65a1a6459ad1",
  onFormSubmit: function($form) {
           sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
       } 
});
</script> -->
<!--Live HubSpot -->



<!--test HubSpot -->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
  portalId: "6867561",
  formId: "d38076a1-51f2-4539-92fc-a7e3eb58c6d1",
   onFormSubmit: function($form) {
            sessionStorage.setItem("hubspotsuccessMessage", "Thank you. The form was submitted successfully.");
        } 
});
</script> -->
<!--test HubSpot -->


</div>
          <div class="clear"></div>

          <?php
          while (have_posts()) : the_post(); ?>
          <div class="entry-content-page">
            <?php the_content(); ?>
          </div>
          <?php
        endwhile;
        wp_reset_query();
        ?>


      </div>
    </div>

  </div>
</div>

</div>


<div class="gbd-free-price-report-btm-wrapper">
  <div class="gbd-content">
    <div class="container">
      <div class="row">

      <div class="gbd-inner-page-wrapper">
        <div class="gbd-free-price-report-btm">
          <div class="gbd-default-title">
          <h3> Why Request Your Free Report</h3>
         </div>
         <p>If you’re priced too high, marketing performance will suffer. If you’re priced too low, margins will suffer. We’ll provide precise and accurate data so you can find the sweet spot. 
         </p>

       </div>
     </div>
     <div class="gbd-you-will-get-block">
      <div class="gbd-default-title"><h3>You’ll Get 6 FREE Reports</h3></div>

        <div class="col-md-4">
          <div class="gbd-you-will-thumbnail">
            <h3><span><i class="fa fa-eye"></i>Competitive Insights</span></h3>

            <img src="<?php echo get_template_directory_uri()?>/images/competitive-insights.jpg" alt="Competitive Insights">
          </div>

        </div>

        <div class="col-md-4 ">
          <div class="gbd-you-will-thumbnail">

            <h3><span><i class="fas fa-chart-bar"></i>Benchmark Report</span></h3>
            <img src="<?php echo get_template_directory_uri()?>/images/bench-mark-report.jpg" alt="Benchmark Report">
          </div>
        </div>

        <div class="col-md-4">
          <div class="gbd-you-will-thumbnail">


            <h3><span><i class="fa fa-search-dollar"></i>Assortment Analysis</span></h3>
            <img src="<?php echo get_template_directory_uri()?>/images/assortment-analysis.jpg" alt="Assortment Analysis">

          </div>
        </div>


        <div class="col-md-4">
          <div class="gbd-you-will-thumbnail">

            <h3><span><i class="fa fa-sitemap"></i>Your 3 Biggest Competitors</span></h3>
            <img src="<?php echo get_template_directory_uri()?>/images/biggest-competitor.jpg" alt="Your 3 Biggest Competitors">

          </div>
        </div>

        <div class="col-md-4">
          <div class="gbd-you-will-thumbnail">

            <h3><span><i class="fas fa-file-alt"></i>Catalog Breakdown</span></h3>
            <img src="<?php echo get_template_directory_uri()?>/images/catalog-breakdown.jpg" alt="Catalog Breakdown">

          </div>
        </div>
        <div class="col-md-4">
          <div class="gbd-you-will-thumbnail last-child">

            <h3><span><i class="fa fa-chart-line"></i>NEAREST 5 COMPETITORS</span></h3>
            <img src="<?php echo get_template_directory_uri()?>/images/nearest-five.jpg" alt="NEAREST 5 COMPETITORS">
</div>
          </div>
     
        <div>
        </div>

        </div>
      </div>
    </div>
  </div>

  <div>
  </div>
</div>

<!--live hubspot -->
<script type="text/javascript">
//   jQuery(document).ready(function(){
//    jQuery(document).on("click","#hsForm_d56b7ec6-6058-4937-abf8-65a1a6459ad1 input[type=submit]",function(e){
//     console.log("clicked");

// var frm = jQuery('#hsForm_d56b7ec6-6058-4937-abf8-65a1a6459ad1');
//     var data = new FormData(jQuery('#hsForm_d56b7ec6-6058-4937-abf8-65a1a6459ad1')[0]);
//             // e.preventDefault();
//             jQuery.ajax({
//                 type: frm.attr('method'),
//                 url: frm.attr('action'),
//                 cache: false,
//                 contentType: false,
//                 processData: false,
//                 data: data,
//                 success: function (data) {
//                     console.log('Submission was successful.');
//                       jQuery("#free_price_report").append("<div class='hubspotsuccessMessage'>The form was successfully submitted</div>");
//                     setTimeout(function(){
//                       jQuery(".hubspotsuccessMessage").hide();
//                     },5000);
                    
//                     console.log(data);
//                 },
//                 error: function (data) {
//                     console.log('An error occurred.');
//                     console.log(data);
//                 },
//             }); 
//             return false;
//})
// })
</script>

<!--live hubspot -->

<script>
jQuery(window).load(function(){
  //implementation
 checkboxToSelect.init({
    //HS_checkboxName : "cat_you_may",
    //HS_checkboxContainer : ".hs_cat_you_may",
    //HS_formID: "#hsForm_d38076a1-51f2-4539-92fc-a7e3eb58c6d1",
   HS_formID: "#hsForm_d56b7ec6-6058-4937-abf8-65a1a6459ad1",
   // HS_checkboxPlaceholder : "Category You Are Interested In (Select One or More)",
    //selectBoxPositionToAppend: "#hsForm_026bd465-a78e-4664-b1b7-b601f3d6b0cf .hs_submit",
    //selectBoxPositionToAppend: "#hsForm_1bf6474b-1e66-4abf-98f7-273fe3f11641 .hs_submit",  
    mapDefault: [
      {
        name : "annualrevenue",
        type : "text"
      }
    ],
    mapCustom: [
      {
        name : "annual_web_revenue",
        type : "select"
      }
    ]
});

});
if(sessionStorage.getItem("hubspotsuccessMessage") != null){
jQuery("#free_price_report").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>");
sessionStorage.removeItem("hubspotsuccessMessage");
}

</script>
    <?php
    get_footer();