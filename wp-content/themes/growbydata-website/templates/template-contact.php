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
                    <div class="col-md-8 col-md-offset-2">
                        <h2>We want to hear from you</h2>
                        <p>
                            If you are seeking our services, investigating partnership opportunities,<br> or want to join our company and work in Big Data, please contact us.  <Span>All inquiries are kept confidential.</Span>
                        </p>
                        <div id="contact_form">
                            <?php echo do_shortcode('[contact-form-7 id="436" title="Contact us"]'); ?>
                        </div>
                     </div>
                </div>

                <hr>

                <div class="row nopadding">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Or contact us by email</h3>
                        <p>
                        <p>
                            <a class="main-icon" href="mailto:info@growbydata.com"><span class="gbd-sprite gbd-mail">mail</span>info@GrowByData.com</a>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--BODY ENDS HERE-->

    </div>
<?php
get_footer();