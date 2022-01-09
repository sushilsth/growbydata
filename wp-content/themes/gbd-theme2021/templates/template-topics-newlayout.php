<?php
/*
Template Name: Topics Template-Price Intelligence
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
 <div class="bg_cover-banner text-white landing-page-banner  text-white px-10 py-5 topics-banner-price-intel">
      <?php the_field('banner-topics'); ?>
    </div>
  </div>
  </section>
  <!-- GBD Static Banner -->

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

  <!-- first -->
  <section>
    <div class="odd background-light block-1">
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
             <div class="col-md-12">                
              <h2 class="font-weight-bold mb-3" style="color:#272725; "><?php echo $title; ?> 
</div>
              <div class="col-md-6 col-sm-12 mb-4 align-self-center">
                <div class="right-text-list text-left align-self-center">
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
            </div>

             <div class="col-md-6 col-sm-12 col-12 align-self-center  text-center mb-3 "><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
          </div>
        </div>
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 
   <?php if (have_rows('First-block-2')): ?>
    <div class="container">
            <div class="row">
        <?php
        $i = 1;
        while (have_rows('First-block-2')): the_row();
          $listing= get_sub_field('listing');
            $title = get_sub_field('title');

          ?>

              <div class="col-md-12 col-sm-12 mb-4 mb-md-0">
                <h3 class="font-weight-bold" style="color:#272725; "><?php echo $title; ?> 
                </h3>
                <div class="right-text-list text-left ">
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
            </div>
        
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 

   <?php if (have_rows('First-block_3')): ?>
    <div class="container">
            <div class="row">
        <?php
        $i = 1;
        while (have_rows('First-block_3')): the_row();
          $listing= get_sub_field('listing');
            $title = get_sub_field('title');
             $image = get_sub_field('image');          

          ?>
                <div class="col-md-12 order-first mb-3"> 
            <h3 class="font-weight-bold " style="color:#272725; "><?php echo $title; ?> 
</div>
                                <div class="col-md-6 col-sm-12 col-12 align-self-center text-center order-3"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
              </span></div>
  
              <div class="col-md-6 col-sm-12 mb-4 align-self-center  order-2 order-md-3 mb-3 mt-3">
                <div class="right-text-list text-left align-self-center">
                </h3>
                <div class="list-top"><?php echo $listing; ?></div>
              </div>
               <a class="btn px-5 py-2 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">Learn More</a> 
            </div>

            
          </div>
        
        <?php
        $i++;
      endwhile; ?>
    <?php endif; ?> 

  </div>
        </div>
  </div>

</section>

<!-- first -->


  <!-- second block -->
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
                 <div class="col-md-6">
              <div class="right-text-list text-left align-self-center">
              
              <div class="list-top"><?php echo $listing; ?></div>
                      <a class="btn px-5 py-2 mb-3 orange_btn" href="<?php echo site_url('/talk-to-expert'); ?>">
Talk to an Expert</a>
            </div>
          </div>
            <div class="col-md-6 col-sm-12 align-self-center pr-md-5 text-right"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
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
