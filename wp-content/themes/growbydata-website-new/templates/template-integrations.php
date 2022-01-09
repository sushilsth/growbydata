<?php
/*
Template Name: Integrations Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
    <div class="gbd-home gbd-inti">
        <!--BANNER STARTS HERE-->
        <div class="gbd-banner gbd-in-banner">
            <div class="gbd-shadow-inner">
                <div class="container">

                    <h2>Integrations</h2>
                    <p>We support the top platforms. Accelerate your growth by integrating our data solutions with services you already use.</p>

                    <a href="#" onclick="event.preventDefault()" id="free-trial-9" data-toggle="modal" data-target="#freeTrial" class="btn btn-default btn-lg m-btn free-trial slideRight">START FREE TRIAL</a>
                    <a href="<?php echo site_url(); ?>/contact-us" class="btn btn-default btn-lg m-btn slideLeft">SCHEDULE A CALL</a>
                </div>
            </div>

        </div>
        <!--BANNER ENDS HERE-->

        <!--BODY STARTS HERE-->
        <div class="gbd-content gbd-inner">
            <div class="container">
                <div class="row inti-blocks-wrap">
                    <h3>Supported online marketplaces</h3>
                    <p>Easily optimize your listings and grow your profits on these marketplaces by<br> using GrowByData’s technology and services</p>
                    <div class="col-md-12 col-xs-12 inti-blocks ">
                        <ul class="amazon-block">
                            <li class="list-heading">Get everything you need to sell and profit on Amazon</li>
                            <li> Syndicate your product catalog</li>
                            <li>Enrich product details and copy</li>
                            <li>Optimize pricing</li>
                            <li>Avoid feed suspension issues</li>
                            <li>Identify high-potential products</li>
                        </ul>
                        <ul class="google-block">
                            <li class="list-heading">Get everything you need to sell and profit on Google</li>
                            <li>Send high quality product data</li>
                            <li>Locate and send required GTINs</li>
                            <li>Use advanced campaign targeting</li>
                            <li>Avoid feed suspension issues</li>
                        </ul>
                        <div class="clear"></div>
                        <uL class="support-sprite-wrap">
                            <li class="support-sprite support-ebay">ebay</li>
                            <li class="support-sprite support-houz">Houzz</li>
                            <li class="support-sprite support-soon">Coming soon</li>
                        </uL>

                    </div>

                </div>

                <div class="row inti-blocks-wrap">
                    <h3>Supported ecommerce carts</h3>
                    <p>Centralize your product data with GrowByData - <br>enriching, optimizing, syncing, and syndicating it daily</p>

                    <ul class="sup-ecommerce">
                        <li class="sup-ecommerce-sprite sup-aabaco">Aabaco</li>
                        <li class="sup-ecommerce-sprite sup-magento">Magento</li>
                        <li class="sup-ecommerce-sprite sup-bcommerce">Big Commerce</li>
                        <li class="sup-ecommerce-sprite sup-shopify">Shopify</li>
                        <li class="sup-ecommerce-sprite sup-3dcart">3Dcart</li>
                    </ul>
                    <div class="clear"></div>
                    <span>And custom carts, with others coming soon</span>


                </div>
                <div class="row inti-blocks-wrap no-border">
                    <h3>Supported back-end software</h3>
                    <p>Break data silos and improve speed and efficiency with GrowByData </p>

                    <img class="logo-img" src="<?php echo get_template_directory_uri()?>/images/soft-logo.png" alt="Supported back-end software"/>
                    <span>And custom integrations, with others coming soon</span>
                </div>
            </div>
        </div>





        <div class="gbd-content btm-content">
            <div class="container">
                <span class="gbd-allcaps gbd-caps">CLIENT SPOTLIGHT</span>
                <br>
                <div class="row">
                    <div class="gbd-block">
                        <div class="info-box greek-logo info-padding">
                            <h3>Publishing Data to Amazon</h3>
                            <p>Greek Gear quickly recovered from a feed suspension and grew sales 64% in 2 months.</p>
                            <a href="<?php echo get_template_directory_uri()?>/downloads/GBD-GreekGear-CaseStudy-d6.pdf" download class="btn btn red-btn ">VIEW CASE STUDY</a>
                        </div>
                        <div class="info-box schuler-logo">
                            <h3>Enriching Googleable Data</h3>
                            <p>Schuler Shoes added product attributes to 16,980 SKUs, netting 58,180 new attributes.</p>
                            <a href="<?php echo get_template_directory_uri()?>/downloads/GBD-Schuler-Shoes.pdf" download class="btn btn red-btn ">VIEW CASE STUDY</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gbd-content btm-content-btn">
            <div class="container">
                <a class="btn red-btn" id="free-trial-10" href="#" onclick="event.preventDefault()" data-toggle="modal" data-target="#freeTrial">START FREE TRIAL</a>
            </div>
        </div>

    </div>
<?php
get_footer();