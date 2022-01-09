<?php
/*
Template Name: Custom Insights
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>

<div class="gbd-ad-intel-template gbd-solution-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
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
  <section>
    <!-- GBD Static Banner -->
    <div class="bg_cover-banner custom-insights-banner marketplace-banner custominsights-banner text-white">
      <?php the_field('custominsights slider'); ?>
    </div>
  </section>
  <!-- GBD Static Banner -->

  <!-- first -->
  <section>
    <div class=" text-white even bgwhite block-1">
     <?php if (have_rows('first-block')): ?>
      <?php
      $i = 1;
      while (have_rows('first-block')): the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');          
        $listing= get_sub_field('listing');
        // $getdemo= get_sub_field('getdemo');
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12 align-self-center pr-md-5 "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span>

          </div>

          <div class="col-md-6 col-sm-12  6 mb-4 mt-4 mb-md-0 mt-md-0 pl-md-4 order-first order-md-2">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
      </div>



    </div>
  </div>
  <?php
  $i++;
endwhile; ?>
<?php endif; ?> 

</section>

<!-- first -->



<!-- Second -->
<section>

  <div class=" text-white even  bgwhite  background-light block-2 pb-0">
   <?php if (have_rows('second-block')): ?>
    <?php
    $i = 1;
    while (have_rows('second-block')): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3 text-center"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>

        </div>
      </div>



    </div>
  </div>
  <?php
  $i++;
endwhile; ?>
<?php endif; ?> 
</section>

<!-- Second -->


<!-- Third -->
<section class="even bgwhite background-light custom_insights_bottom_wrap">
  <div class="container">
    <div class="custom_insights_bottom">
      <div class="custom_insights_block custom_insights_block-first">

        <div class="text-field font-weight-bold text-center">
          <span class="number">1</span> 
          <p>Align objectives at strategic kick off</p></div>
          <div class="img-block">  
            <picture>
              <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_first.webp">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_first.png" alt="step1">
              </picture> 
            </div>
          </div>

          <div class="custom_insights_block custom_insights_block-second">
            <div class="text-field font-weight-bold">
              <span class="number">2</span> 
              <p>Define custom data needs to improve search, product, and marketplace performance</p>
            </div>
            <div class="img-block">  
              <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_second.webp">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_second.png" alt="step2"> 
                </picture>
              </div>
            </div>

            <div class="custom_insights_block custom_insights_block-third">
              <div class="text-field font-weight-bold text-center">
                <span class="number">3</span> 
                <p>Custom data transfer to your BI tool of choice</p></div>
                <div class="img-block">  
                  <picture>
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_third.webp">
                      <img src="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_third.png" alt="step3"> 
                    </picture>
                  </div>
                </div>
                <div class="custom_insights_block custom_insights_block-fourth">
                  <div class="text-field font-weight-bold text-center">        
                    <span class="number">4</span> 
                    <p>
                    Mine millions of shopper journey and digital shelf data touchpoints to continually surface new opportunities</p>
                  </div>
                  <div class="img-block">  
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_fourth.webp">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_fourth.png" alt="step4"> 
                      </picture>
                    </div>
                  </div>

                  <div class="custom_insights_block custom_insights_block-fifth">
                    <div class="text-field font-weight-bold text-center">        
                      <span class="number">5</span> 
                      <p>Act on fresh, holistic marketing insights for competitive advantage</p></div>
                      <div class="img-block">  
                        <picture>
                          <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_fifth.webp">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/custom_insights_block_fifth.png" alt="step5"> 
                          </picture>
                        </div>
                      </div>
                    </div><!-- custom_insights_bottom -->

                    <a class="btn px-5 py-3 orange_btn custominsights-btn" href="<?php echo site_url('/talk-to-expert'); ?>">Talk to an Expert</a>

                  </div>
                </section>

                <!-- Third -->




              </div>
            <?php
            get_footer();

