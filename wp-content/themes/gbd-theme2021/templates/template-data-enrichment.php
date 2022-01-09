<?php
/*
  Template Name: Data Enrichment
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
  ?>
  <?php get_header(); ?>

  <?php get_header(); ?>
  <?php $eci_date = new DateTime(); ?>

  <div class="gbd-ad-intel-template gbd-solution-template data-enrichment-template">
    <header class="entry-header">
      <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
    </header>


    <section>
      <!-- GBD Static Banner -->
      <div class="bg_cover-banner marketplace-banner text-white dataenrichment-banner">
        <?php the_field('enricheddata slider'); ?>
      </div>
    </section>
    <!-- GBD Static Banner -->

    <!-- first -->
    <section>
      <div class=" odd bgwhite block-1">
        <?php if (have_rows('First-block')): ?>
          <?php
          $i = 1;
          while (have_rows('First-block')): the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');          
            $listing= get_sub_field('listing');
            ?>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-12 col-12 pr-md-5 align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
                </span></div>
                <div class="col-md-6 col-sm-12 mb-4 mt-4 mb-md-0 mt-md-0 pl-md-4 order-first order-md-2 align-self-center">
                  <div class="right-text-list text-left align-self-center">
                    <h2 class="pb-3"><?php echo $title; ?> 
                  </h2>
                  <div class="list-top"><?php echo $listing; ?></div>
                </div>
              </div>
            </div>
          </div>
          <?php
          $i++;
        endwhile; ?>
      <?php endif; ?> 
    </div>

  </section>

  <!-- first -->



  <!-- second -->

  <section>
    <div class="even background-light block-2 text-center">
      <div class="container">
        <?php
        while (have_posts()) : the_post(); ?>
          <div class="entry-content-page">
            <?php the_content(); ?>
          </div>
          <?php
        endwhile;
        wp_reset_query();
        ?>
        <div class="row">

         <?php if (have_rows('second-block')): ?>
          <?php
          $i = 1;
          while (have_rows('second-block')): the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');          
            $listing= get_sub_field('listing');
      // $getdemo= get_sub_field('getdemo');

            ?>

            <div class="col-md-6 col-sm-12 mb-5 data-enrichment-bottom mt-3 px-0 pr-md-5 DEblock_<?php echo $i; ?>" >
              <div class="col-md-12 col-sm-12 pr-md-5 DEblock_inner<?php echo $i; ?> ">
               <div class="col-md-12 col-12 col-sm-12 align-self-center px-0" ><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
               </span></div>

               <div class="col-md-12 col-12  col-sm-12 px-0  align-self-center">
                <div class="right-text-list text-left align-self-center mt-3 mb-3 px-0">
                  <h2 class="pb-3"><?php echo $title; ?> 
                </h2>
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
            </div>
          </div>
          
        </div>



        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 

  </div>
  <section>
    <div class="mb-0 mx-auto">
      <a class="btn px-5 py-2 orange_btn " href="<?php echo site_url('/talk-to-expert'); ?>">
      Talk to an Expert</a>

    </div>
  </section>
</div>
</div>
</section>

<!-- second -->
<?php
get_footer();



