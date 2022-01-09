<?php
/*
Template Name: Topics Template-Ad Intelligence
 *
 * @package GBD-Theme2021
 * @since Growbydata Site 1.0.4
 */
?>

<?php get_header(); ?>
<?php $eci_date = new DateTime(); ?>

<div class="gbd-topics-template">
  <header class="entry-header">
    <?php //the_title('<h1 class="page-title">', '</h1>'); ?>
  </header>


  <section>
    <!-- GBD Static Banner -->
    <div class="gbd-landing-page-banner ">
 <div class="bg_cover-banner text-white landing-page-banner  text-white px-10 py-5 topics-banner-ad-intel">
      <?php the_field('banner-topics'); ?>
    </div>
  </div>
  </section>
  <!-- GBD Static Banner -->


<!-- First Content -->
  <section>
    <div class="container">
    <div class="odd bgwhite block-1">
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


<!-- First -->

<section>
  <div class="even background-light block-1">
   <div class="container">
        <div class="row">
          <div class="col-md-12"><h2 class="font-weight-bold mb-3">Why Should Your Agency or Brand Use Advertising Intelligence to Improve eCommerce Performance?</h2></div>
          <?php if (have_rows('First-block')): ?>
    <?php
    $i = 1;
    while (have_rows('First-block')): the_row();
      $image = get_sub_field('image');          
      $listing= get_sub_field('listing');
      $title= get_sub_field('title');
      ?>
        <?php if( $i%2 == 1 ): ?>

          <div class="col-md-12 even-row row">
        <div class="col-md-12"><h3 class="font-weight-bold mb-3"><?php echo $title;?></h3>
        </div>

  <div class="col-md-6 col-sm-12 align-self-center">
                <div class="right-text-list text-left">
                <div class="list-top"><?php echo $listing; ?></div>
            </div>
            </div>
     <div class="col-md-6 col-12 col-sm-12 align-self-center text-right mb-3"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span></div>
          </div>
        <?php else: ?> 
          <div class="odd-row col-md-12 row">

        <div class="col-md-12 order-1"><h3 class="font-weight-bold mb-3"><?php echo $title;?></h3></div>
              <div class="col-md-6 col-12 col-sm-12 align-self-center text-left mb-3 order-3"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>
               <div class="col-md-6 col-sm-12 align-self-center mb-3 order-2 order-md-3">
            <div class="right-text-list text-left ">
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
  </div>
        </div> 
 
        <?php endif; ?>
 
 
 
     
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
</div>
    </div>
</section>

<!-- First -->
<section>

  <div class="even bgwhite block-2">

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
             <div class="col-md-12"> <h2 class="pb-3 font-weight-bold"><?php echo $title; ?> </h2>
              </div>
                 <div class="col-md-6 col-sm-12 mb-3">
              <div class="right-text-list text-left align-self-center">
              
              <div class="list-top"><?php echo $listing; ?></div>
                      <a class="btn px-5 py-2 mb-3 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
Talk to an Expert</a>
            </div>
          </div>
            <div class="col-md-6 col-sm-12 align-self-center text-right"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
            </span></div>
         
        </div>
      </div>
      <?php
      $i++;
    endwhile; ?>
    <?php endif; ?>
  </div>
  </section>
<?php
get_footer();
