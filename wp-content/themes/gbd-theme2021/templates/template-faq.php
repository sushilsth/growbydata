<?php
/*
Template Name: FAQ Template
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-faq-template pb-5">
  <div class="gbd-faq">
        <header class="entry-header">
          <div class="container">
          <?php the_title('<h1 class="page-title">', '</h1>'); ?>
        </div>
        </header>
    <div class="container">
      <div class="row">
       <div class="col-md-12 col-sm-12">
        <div class="gbd-faq-accordin gbd-accordin">
          <div class="accordion" id="accordion">

            <div class="search_intelligence_faq">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Search Intelligence
              </h2>
              <?php
// Check rows exists.
              if( have_rows('search_intelligence_faq') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('search_intelligence_faq') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#search_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="search_collapse<?php echo $i; ?>" class="collapse">
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

            <div class="marketplace_intelligence_faq">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Marketplace Intelligence
              </h2>
              <?php
// Check rows exists.
              if( have_rows('marketplace_intelligence') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('marketplace_intelligence') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#marketplace_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="marketplace_collapse<?php echo $i; ?>" class="collapse">
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

            <div class="product_intelligence_faq">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Product Intelligence
              </h2>
              <?php
// Check rows exists.
              if( have_rows('product_intelligence') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('product_intelligence') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#product_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="product_collapse<?php echo $i; ?>" class="collapse">
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

            <div class="map_faq">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Minimum Advertised Price (MAP)
              </h2>
              <?php
// Check rows exists.
              if( have_rows('map_faq') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('map_faq') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#map_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="map_collapse<?php echo $i; ?>" class="collapse">
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

            <div class="product_feeds">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Product Feeds
              </h2>
              <?php
// Check rows exists.
              if( have_rows('product_feeds') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('product_feeds') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#product_feed_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="product_feed_collapse<?php echo $i; ?>" class="collapse">
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

            <div class="service_faq">
              <h2>
                <!-- <?php echo get_field('faq_accordion_title'); ?> -->
                Services
              </h2>
              <?php
// Check rows exists.
              if( have_rows('service_faq') ):
    // Loop through rows.
                $i = 0;
                while( have_rows('service_faq') ) : the_row();
                  $i++;
        // Load sub field value.
                  ?>
                  <div class="card">
                    <div class="card-header">
                      <h2 class="mb-0">
                        <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#service_collapse<?php echo $i; ?>" data-parent="#accordion">
                          <i class="fas fa-arrow-circle-down"></i> 
                          <?php echo get_sub_field('accordion_title'); ?>
                        </button>              
                      </h2>
                    </div>
                    <div id="service_collapse<?php echo $i; ?>" class="collapse">
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
</div><!-- gbd-faq --> 

</div><!-- gbd-default-template -->

<?php
get_footer();