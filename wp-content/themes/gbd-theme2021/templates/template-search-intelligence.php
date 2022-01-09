<?php
/*
Template Name: Search Intelligence
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
    <div class="bg_cover-banner marketplace-banner search-banner text-white">
      <?php the_field('Searchintel slider'); ?>
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
              <div class="col-md-6 col-sm-12 col-12 align-self-center pr-md-5 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
              <div class="col-md-6 col-sm-12 mb-4 mb-md-0 pl-md-4 order-first order-md-2  align-self-center">
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



<!-- 2nd -->

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
          <div class="col-md-6 col-sm-12 mb-4 pr-md-5 align-self-center">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-12 col-sm-12 align-self-center pl-md-4  text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>

      </div>
    </div>
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
</div>
</section>

<!-- 2nd -->


<!--block3 -->

<section>

 <div class=" odd bgwhite  block-3">
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
          <div class="col-md-6 col-sm-12 align-self-center pr-md-5 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
          </span></div>
          <div class="col-md-6 col-sm-12 mb-4 mb-md-0 pl-md-4 order-first order-md-2 align-self-center">
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

<!-- MP-Intelligence-block3 -->


<!-- MP-Intelligence-block4 -->
<section>
  <div class="text-white odd background-light block-4">
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
          <div class="col-md-6 col-sm-12 mb-4 pr-md-5 mb-md-0 pr-md-5 align-self-center">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 align-self-center pl-md-4 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>
        <div class="clear"></div>
        <div class="mb-0 mx-auto mt-5">
        <a class="btn px-5 py-2 orange_btn" href="#searchintelbottom-banner">
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

<!-- MP-Intelligence-block4 -->


<!-- Block 5 -->
<section>

  <div class="text-white even bgwhite block-5">
    <?php if (have_rows('fifth-block')): ?>

      <?php
      $i = 1;
      while (have_rows('fifth-block')): the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');          
        $listing= get_sub_field('listing');
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12 align-self-center pr-md-5 text-center"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
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
    <?php endif; ?></div>
  </section>


  <!-- Block -5 -->

  <!-- bluebanner-bottom -->
  <section >

    <div class="searchintel-blue-banner" id="searchintelbottom-banner">
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
             <!--    <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
                  Talk to an Expert and Learn How
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
  <!-- MP-Intelligence-bluebanner-bottom -->

</div>

<?php
get_footer();
