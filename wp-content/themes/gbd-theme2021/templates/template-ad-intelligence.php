<?php
/*
Template Name: Ad Intel
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
    <div class="bg_cover-banner marketplace-banner ad-intel-banner text-white">
      <?php the_field('ad_intel-banner'); ?>
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
              <div class="col-md-6 col-sm-12 col-12 pr-md-5 text-center align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
              <div class="col-md-6 col-sm-12 pl-md-4 mb-4 mt-4 mb-md-0 mt-md-0 order-first order-md-2 align-self-center">
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

  <div class=" text-white even background-light block-2">
   <?php if (have_rows('second-block')): ?>
    <?php
    $i = 1;
    while (have_rows('second-block')): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');
      // $getdemo= get_sub_field('getdemo');

      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 pr-md-5 col-sm-12 mb-4 pr-md-5 mb-md-0 align-self-center">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 align-self-center pl-md-4 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>


</div>
</div>
<?php
$i++;
endwhile; ?>
<?php endif; ?> 
</div>
</section>

<!-- second -->


<!--Third -->

<section>

 <div class=" odd bgwhite  block-3">
  <?php if (have_rows('Third-block')): ?>

    <?php
    $i = 1;
    while (have_rows('Third-block')): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');

      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 align-self-center pr-md-5 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
          </span></div>
          <div class="col-md-5 col-sm-12 pl-md-4 mb-4 mt-4 mb-md-0 mt-md-0 order-first order-md-2 align-self-center">
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

<!---Third -->


<!-- fourth -->

<section>

  <div class=" text-white even background-light block-4">
   <?php if (have_rows('foruth-block')): ?>
    <?php
    $i = 1;
    while (have_rows('foruth-block')): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');
      // $getdemo= get_sub_field('getdemo');

      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 pr-md-5 col-sm-12 mb-4 pr-md-5 mb-md-0 align-self-center">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 align-self-center pl-md-4 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>


</div>
</div>
<?php
$i++;
endwhile; ?>
<?php endif; ?> 
</div>
</section>

<!-- fourth -->

<!-- Schedule a demo section -->


<!-- Schedule a demo section -->


<!-- bluebanner-bottom -->
<section>

  <div class="prodfeed-blue-banner adintel-bottom-banner" id="adintel-bottom-banner">
   <?php if (have_rows('bottom-block')): ?>

    <?php
    $i = 1;
    while (have_rows('bottom-block')): the_row();
      $title = get_sub_field('title');
      $description = get_sub_field('description');          
      // $talktoexpert= get_sub_field('talktoexpert');
      ?>

      <div class="container">
        <div class="row">
          <div class="col-md-12 py-5 text-center">
            <h3 class="text-white text-center font-weight-bold"><?php echo $title; ?></h3>
            <p class="text-white text-center"><?php echo $description; ?></p>
            <div class="mb-0 mx-auto">
<!--               <a class="btn px-3 py-2 orange_btn" href="<?php //echo esc_url( $talktoexpert ); ?>">
-->                

<!-- <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
  Talk to an Expert and Learn How
</a> -->

<?php //get_template_part( 'template_parts', 'template-schedule-demo-solution-pages-form' ); ?>
 <?php include 'template_parts/template-schedule-demo-solution-pages-form.php';?> 
</div>
</div></div>
</div>
<?php
$i++;
endwhile; ?>
<?php endif; ?>
</div>
</section>
<!--bluebanner-bottom -->

</div>
</div>

<?php
get_footer();

