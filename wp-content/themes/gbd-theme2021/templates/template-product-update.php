<?php
/*
Template Name: Product Update
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>

<div class="gbd-product-update-template gbd-solution-template">
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
    <div class="bg_cover-banner marketplace-banner product-update-banner text-white">
      <?php the_field('product_update_banner'); ?>
    </div>
  </section>
  <!-- GBD Static Banner -->

  <!-- first -->
  <section>
    <div class=" odd bgwhite block-1">
      <?php if (have_rows('first-block')): ?>

        <?php
        $i = 1;
        while (have_rows('first-block')): the_row();  
          $title = get_sub_field('title');
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> 
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
    <div class="even background-light block-2">
      <?php if (have_rows('second-block')): ?>

        <?php
        $i = 1;
        while (have_rows('second-block')): the_row();        
          $listing= get_sub_field('listing');
                    $title = get_sub_field('title');

          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> 
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

<!-- second -->

  <!-- third -->
  <section>
    <div class=" odd bgwhite block-3">
      <?php if (have_rows('third-block')): ?>

        <?php
        $i = 1;
        while (have_rows('third-block')): the_row(); 
                  $title = get_sub_field('title');
       
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> 
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

<!-- third -->

  <!-- Fourth -->
  <section>
    <div class="even background-light block-4">
      <?php if (have_rows('fourth-block')): ?>

        <?php
        $i = 1;
        while (have_rows('fourth-block')): the_row(); 
          $title = get_sub_field('title');
          $listing= get_sub_field('listing');
          ?>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> 
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

<!-- fourth -->



  <!-- Block -5 -->

  <!-- bluebanner-bottom -->
  <section>

    <div class="product-update-bottom-block searchintel-blue-banner">
     <?php if (have_rows('bottom-block')): ?>

      <?php
      $i = 1;
      while (have_rows('bottom-block')): the_row();
        $listing = get_sub_field('listing');          
        ?>

        <div class="container">
          <div class="row">
            <div class="col-md-12 py-4 text-center">
              <div class="text-white text-center"><?php echo $listing; ?></div>
            </div></div>
          </div>
          <?php
          $i++;
        endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- MP-Intelligence-bluebanner-bottom -->

</div>

<?php
get_footer();
