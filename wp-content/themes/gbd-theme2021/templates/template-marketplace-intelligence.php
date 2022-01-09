<?php
/*
Template Name: Marketplace Intelligence
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
    <div class="bg_cover-banner marketplace-banner text-white">
      <?php the_field('MarketplaceIntel slider'); ?>
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
              <div class="col-md-6 col-sm-12 col-12 pr-md-5  align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
              <div class="col-md-6 col-sm-12 pl-md-4 mb-4 mt-5 mb-md-0 order-first order-md-2 align-self-center">
                <div class="right-text-list text-left">
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
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 align-self-center  mb-4  mb-md-0 pr-md-5 ">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 align-self-center text-right pl-md-4 "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
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
      // $getdemo= get_sub_field('getdemo');

      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 align-self-center pr-md-5"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
          </span></div>
          <div class="col-md-6 col-sm-12 pl-md-4 align-self-center mt-4 mt-md-0 align-self-center order-first order-md-2">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>

        <div class="mb-0 mx-auto mt-5 order-md-3">         
         <a class="btn px-5 py-2 orange_btn" href="#marketplace-banner-bottom">
           Get a Demo
         </a>
       </div>

     </div>
   </div>
   <?php
   $i++;
 endwhile; ?>
<?php endif; ?> 
</div>
</section>

<!---fourth -->


<section>

 <div class=" odd background-light block-4">
  <?php if (have_rows('fourth-block')): ?>

    <?php
    $i = 1;
    while (have_rows('fourth-block')): the_row();
      $title = get_sub_field('title');
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');

      ?>
      <div class="container">
        <div class="row">
         
          <div class="col-md-6 col-sm-12 align-self-center pr-md-5  mb-4  mb-md-0">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 pl-md-4  align-self-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>

      </div>
    </div>
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
</div>
</section>

<!---fourth -->

<!-- bluebanner-bottom -->
<section>

  <div class="MP-blue-banner" id="marketplace-banner-bottom">
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
<!-- <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">Talk to an Expert and Learn How
</a> -->
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


