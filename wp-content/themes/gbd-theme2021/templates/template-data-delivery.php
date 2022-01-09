<?php
/*
Template Name: Data Delivery
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
    <div class="bg_cover-banner marketplace-banner search-banner productfeed-banner datadelivery-banner text-white">
      <?php the_field('datadelivery slider'); ?>
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
            <div class="col-md-5 col-12 col-sm-12 align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span>

          </div>

          <div class="col-md-5 col-sm-12 offset-md-1 offset-sm-0 mb-4 mt-4 mb-md-0 mt-md-0 order-first order-md-2 align-self-center">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>

          <div class="mb-0 mx-auto mt-5">          
           <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
             Talk to an Expert
           </a>
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



</div>
</div>

<?php
get_footer();

