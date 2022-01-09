<?php
/*
Template Name: Contact Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<div class="gbd-contact-us">
    <!--BODY STARTS HERE-->
    <div class="gbd-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <header class="entry-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>

                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
                <div id="contact_form" class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="859" title="Contact us-New"]'); ?>
                </div> 
            </div>
        </div>
<style type="text/css">
    .contact-form span .wpcf7-not-valid-tip {
    color: red !important;
}
.contact-form label span {
    color: #af0000 !important;
}
</style>
    </div>
</div>
<!--BODY ENDS HERE-->

</div>
<!-- <script type="text/javascript">
  if(sessionStorage.getItem("hubspotsuccessMessage") != null){
jQuery("#contact_form").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>");
sessionStorage.removeItem("hubspotsuccessMessage");
}
</script>  -->



<script type="text/javascript">
//   jQuery(document).ready(function(){
//    jQuery(document).on("click","#hsForm_50c69b46-0d93-4ba5-b9fe-429f3af69748 input[type=submit]",function(e){
//     console.log("clicked");

// var frm = jQuery('#hsForm_50c69b46-0d93-4ba5-b9fe-429f3af69748');
//     var data = new FormData(jQuery('#hsForm_50c69b46-0d93-4ba5-b9fe-429f3af69748')[0]);
//             // e.preventDefault();
//             jQuery.ajax({
//                 type: frm.attr('method'),
//                 url: frm.attr('action'),
//                 cache: false,
//                 contentType: false,
//                 processData: false,
//                 data: data,
//              success: function (data) {
//                     console.log('Submission was successful.');
//                       jQuery("#contact_form").append("<div class='hubspotsuccessMessage'>The form was successfully submitted</div>");
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
// })
// })
</script>
<?php
get_footer();