<?php
/*
Template Name: Why us Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-why-us">
    <div class="container">
        <div class="row">
           <div class="col-md-12 col-sm-12">
             <div class="gbd-inner-page-wrapper">
               <!--  <div class="col-md-8 col-md-offset-2"> -->
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

            </div><!-- gbd-inner-page-wrapper -->

            <div class="gbd-why-us-block">
      
<div class="row">
<div class="col-lg-6 col-md-12">

                <div class="gbd-why-us-IT-block gbd-finance-block">

            <div class="gbd-bubble-block fadeIn">             <div class="bubble-text"> <i class="fas  fa-chess-king fa-icon"></i><p>Executives need cross-channel visibility across campaigns and competitors to drive holistic strategy
</p></div>
           </div>

 <div class="gbd-image-block"> <img src="<?php echo get_template_directory_uri()?>/images/merchantising.png" alt="merchantising-person">
           </div>
         
            </div> 
     <!--gbd-why-us-IT-block-->



              <div class="gbd-why-us-IT-block gbd-merchant-block">

            <div class="gbd-bubble-block fadeIn"> 

                <div class="bubble-text"> <i class="fas fa-eye fa-icon"></i><p>Merchandising needs more
 insight into competitor
 pricing strategies
</p></div>
           </div>

           <div class="gbd-image-block"> <img src="<?php echo get_template_directory_uri()?>/images/finance-manager.png" alt="our-needs-complex">
           </div>
            </div> <!--gbd-why-us-IT-block-->

   </div>


   <div class="col-lg-6 col-md-12">


            <!--gbd-why-us-IT-block-->


              <div class="gbd-why-us-IT-block gbd-marketing-block">

            <div class="gbd-bubble-block fadeIn"> <div class="bubble-text"> <img src="<?php echo get_template_directory_uri()?>/images/marketing-icon.png" alt="marketing-icon"><p>Marketing wants to factor
 price competitiveness
 into bidding
</p></div>
           </div>

           <div class="gbd-image-block"> <img src="<?php echo get_template_directory_uri()?>/images/marketing-person.png" alt="marketing Person">
           </div>
            </div> <!--gbd-why-us-IT-block-->


           <div class="gbd-why-us-IT-block gbd-why-us-IT-blocks">

            <div class="gbd-bubble-block fadeIn"> <div class="bubble-text"> <i class="fas fa-check fa-icon"></i><p>IT needs ad, pricing, seo & channel data for our marketing solution</p></div>
           </div>

           <div class="gbd-image-block"> <img src="<?php echo get_template_directory_uri()?>/images/IT-man.png" alt="IT Person">
           </div>
            </div> 



        </div>


            <!-- gbd-why-us-block -->

        </div>
    </div>
    </div>
</div>
<div class="clearfix"></div>

</div>
<div class="gbd-best-choice-block">
    <div class="container">
        <div class="row">
           <div class="col-md-12 col-sm-12">
            <div class="gbd-inner-page-wrapper">
            <div class="gbd-best-choice-accordin gbd-accordin">
              <h3 style="margin-bottom:20px;display:block;width:100%;margin-top:10px">
                <?php echo get_field('why_us_accordion_title'); ?>
            </h3>
                 <div class="accordion" id="accordion">
                <?php

// Check rows exists.
if( have_rows('why_us') ):
    // Loop through rows.
  $i = 0;
    while( have_rows('why_us') ) : the_row();
      $i++;
        // Load sub field value.
      ?>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" data-parent="#accordion">
                    <i class="fa fa-plus"></i> 
                    <?php echo get_sub_field('accordion_title'); ?>
                  </button>              
                </h2>
            </div>
            <div id="collapse<?php echo $i; ?>" class="collapse">
                <div class="card-body">
                    <?php echo get_sub_field('accordion_description'); ?>
                </div>
            </div>
        </div>
        <?php
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
    </div>
            </div>
        </div>
           </div>
       </div>
   </div>
</div><!-- gbd-best-choice-block -->
</div><!-- gbd-default-template -->
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"You want to continually optimize Product Ads across channels using real time visibility ","acceptedAnswer":{"@type":"Answer","text":"Our technology offers you near real time visibility from multiple geographies multiple times daily day on major ad platforms like Google, and marketplaces like Amazon, Walmart, Target, Best Buy and others."}},  
{"@type":"Question","name":"You want to gain SEO Visibility above the field","acceptedAnswer":{"@type":"Answer","text":"We provide visibility on all SERP components for desktop and mobile above the fold for coordinated SEO SEM activities."}}, 
{"@type":"Question","name":"You want to monitor competitor prices precise to the SKU variant level","acceptedAnswer":{"@type":"Answer","text":"We match your SKUs against competitor's products from marketplaces and from ecommerce sites by comparing part numbers, brand names, variants, case packs, and images. Products are matched automatically in “high-confidence” scenarios. Data Analysts manually research “moderate” or “low-confidence” scenarios. We compare products in your catalog to every competitor we find and verify the match accuracy of your Products through a combination of automated and manual data quality checks. We then monitor competitor prices. "}},  
{"@type":"Question","name":"You want data for tens of millions of SKUs or keywords daily","acceptedAnswer":{"@type":"Answer","text":"Our Market Intelligence is powered by our advanced data collection technology, which is built to scale. We can collect data from major ad channels, marketplaces and ecommerce platforms from multiple geographies globally, multiple times daily from desktop and mobile to offer you unprecedented visibility on seo, pricing, advertising, competitive trends and channel."}},  
{"@type":"Question","name":"You want to proactively monitor your channels","acceptedAnswer":{"@type":"Answer","text":"We monitor for Minimum Advertised Price (MAP) compliance, potentially unauthorized sellers, non-authorized channels, resellers with low customer reviews and potential conflict with resellers."}},  
{"@type":"Question","name":"You want Data Enriched to enable Business level analysis","acceptedAnswer":{"@type":"Answer","text":" We enrich data with labels such as categories, above the fold, pricing tiers and more. With these enhanced datasets, you can do deeper analysis to uncover trends and proactively improve your advertising, seo, merchanding and channels."}},  
{"@type":"Question","name":"You want access to Insightful Report 24*7","acceptedAnswer":{"@type":"Answer","text":" Our technology collects product catalog data/ and offers unified reporting on major marketing platforms like Google, Amazon, Walmart, Target and others for ad, SEO, competitor's prices and channel management 24x7."}},  
{"@type":"Question","name":"You want a quick and easy onboarding without a lot of effort  from your team.","acceptedAnswer":{"@type":"Answer","text":" We have a team of highly experienced managers who will guide you step by step for a hassle-free onboarding."}},  
{"@type":"Question","name":"You want to track your product Reviews and ranking.","acceptedAnswer":{"@type":"Answer","text":" Our platform tracks the product's reviews and rankings that you can use to track trends and proactively detect product problems."}}, 
{"@type":"Question","name":"You want the data and results your way (custom rules, projects etc)","acceptedAnswer":{"@type":"Answer","text":" We can customize insights or project per your specific business needs. You can use our data to load into your tools, or use our dashboards"}}]}
 </script>
<?php
get_footer();