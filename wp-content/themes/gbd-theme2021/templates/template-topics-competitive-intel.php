<?php
/*
Template Name: Topics Template-Competitive Intelligence
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>


<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>
<script type="text/javascript">
    var accordionstr  = "topics-accordion";
</script>

<div class="gbd-topics-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
  </header>


  <section>
    <!-- GBD Static Banner -->
    <div class="gbd-landing-page-banner ">
 <div class="bg_cover-banner text-white landing-page-banner  text-white px-10 py-5 topics-banner-ad-intel topics-banner-comp-intel">
      <?php the_field('banner-topics'); ?>
    </div>
  </div>
  </section>
  <!-- GBD Static Banner -->


<!-- First Content -->
  <section>
    <div class="container">
    <div class="odd bgwhite block-entry-content">
            <div class="row">   
            <div class="col-md-12"> 
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
  </section>

 
</div>
    </div>
</section>
<!-- First content ends -->


<!-- Second -->
<section>

  <div class="even background-light block-1">
  
        <div class="container">
          <div class="row">
             <div class="col-md-12">
                  <?php the_field('first-block'); ?>
</div>
        </div>
  </div>
  </section>

<!-- Second section -->


<section>
<div class="even bgwhite block-2 marketing-intel-block">
<div class="container">
  <div class="row">
      <div class="col-md-12">
        <h2 class="font-weight-bold mb-3">How to Evaluate Competitive Intelligence Software for eCommerce?</h2>
        <h3 style="color:#333333" class="mb-3">Types of Competitive Intelligence Available across the Shopper Journey  to Optimize Your Brands on the Digital Shelf</h3>
      </div>

               <div class="gbd-enforce-map-faq-accordin gbd-accordin col-md-12 gbd-marketing-intel-faq">
          <div class="accordion" id="accordion">
            <?php

// Check rows exists.
            if( have_rows('enforce_map_faq') ):
    // Loop through rows.
              $i = 0;
              while( have_rows('enforce_map_faq') ) : the_row();
                $i++;
        // Load sub field value.
                ?>
                <div class="card">
                  <div class="card-header">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" data-parent="#accordion">
                        <?php echo get_sub_field('accordion_title'); ?>                       
                         <i class="fas fa-arrow-circle-up"></i> 

                      </button>              
                    </h2>
                  </div>
                  <div id="collapse<?php echo $i; ?>" class="collapse accordion-collaspe">
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
</section>


<!-- Third container -->
<section>

  <div class="even  bgwhite  block-3">
  <?php if (have_rows('third-block')): ?>

      <?php
      $i = 1;
      while (have_rows('third-block')): the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');          
        $listing= get_sub_field('listing');
        ?>
        <div class="container">
          <div class="row">
             <div class="col-md-12"> <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> </h2>
              </div>
                 <div class="col-md-6 col-sm-12 mb-3">
              <div class="right-text-list text-left align-self-center">
              <div class="list-top"><?php echo $listing; ?></div>
                      <a class="btn px-5 py-2 mb-3 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">Talk to an Expert</a>
            </div>
          </div>
            <div class="col-md-6 col-sm-12 align-self-center text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span></div>
         
        </div>
      </div>
      <?php
      $i++;
    endwhile; ?>
    <?php endif; ?>
  </div>
  </section>

  <!-- Third container -->

<?php
get_footer();
