<?php
/*
Template Name: About growbydata Template
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>

<div class="gbd-default-template gbd-about-gbd">


  <section class="about-banner-wrapper">
    <!-- GBD Static Banner -->
    <div class="bg_cover-banner about-banner text-white">
      <?php the_field('about slider'); ?>
    </div>
  </section>

  <section class="what-we-do pt-5 pb-5 bgwhite">
    <?php if (have_rows('First-block')): ?>
      <?php
      $i = 1;
      while (have_rows('First-block')): the_row();
        $title = get_sub_field('title');         
        $listing= get_sub_field('listing');
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 mb-4 mt-4 mb-md-0 mt-md-0">
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
</section>


<section class="who-we-are background-light">
  <div class="even block-2">
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
          <div class="col-md-5 col-sm-12 align-self-center  mb-4  mb-md-0">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 align-self-center text-center offset-md-1 offset-sm-0"><span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"/>
        </span></div>

      </div>
    </div>
    <?php
    $i++;
  endwhile; ?>
<?php endif; ?> 
</div>
</section> 


<section class="abt-our-solution bgwhite">

 <div class=" odd block-3">
  <?php if (have_rows('Third-block')): ?>

    <?php
    $i = 1;
    while (have_rows('Third-block')): the_row();
      $title = get_sub_field('title');          
      $listing= get_sub_field('listing');

      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="right-text-list text-left align-self-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
          </div>

          <?php if( have_rows('abt_our_solution') ): ?>
            <?php 
            $get_ready_tabs =[];
            while( have_rows('abt_our_solution') ){
              the_row(); 
              $get_ready_tabs[]=[
                'title'=>get_sub_field('title'),
                'icon' => get_sub_field('icon'),
                'description'=>get_sub_field('description'),
                'url'=>get_sub_field('url')
              ];
            }
            ?>

            <div class="gbd-home-insights">
              <ul class="nav nav-pills brand-pills nav-stacked">
                <?php foreach($get_ready_tabs as $key=>$get_ready_tab):?>
                  <li class="brand-nav ">
                    <span class="get-ready-tab">                                          
                      <span class="icons">
                        <?php if( isset($get_ready_tab['icon']['url'])): ?>
                         <img src="<?=$get_ready_tab['icon']['url']?>" alt="<?=$get_ready_tab['icon']['alt']?>">
                       <?php endif; ?>
                     </span>
                     <a href="<?=$get_ready_tab['url']?>"><h3><?=$get_ready_tab['title']?></h3></a>
                     <p><?=$get_ready_tab['description']?></p>
                     <?php if( !empty($get_ready_tab['url']) ): ?>
                      <a class="learn-more" href="<?=$get_ready_tab['url']?>">Learn more
                        <i class="fas fa-caret-right"></i>
                      </a>
                    <?php endif; ?>
                  </span>
                </li>
              <?php endforeach;?>
            </ul>
          </div>

        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php
  $i++;
endwhile; ?>
<?php endif; ?> 
</div>
</section>

<section class="abt-enriched background-light">

 <div class="odd block-4">
  <?php if (have_rows('fourth-block')): ?>

    <?php
    $i = 1;
    while (have_rows('fourth-block')): the_row();
      $title = get_sub_field('title');          
      $listing= get_sub_field('listing');

      ?>
      <div class="container">
        <div class="row">
         
          <div class="col-md-12 col-sm-12 align-self-center  mb-4  mb-md-0">
            <div class="right-text-list align-self-center text-center">
              <h2 class="pb-3"><?php echo $title; ?> 
            </h2>
            <div class="list-top"><?php echo $listing; ?></div>
            <picture>
        <img src="<?php echo get_template_directory_uri()?>/assets/images/abt-enriched-img.png" alt="abt-enriched-img"> 
      </picture>
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


<section class="text-center trusted-partners-wrapper py-5 bgwhite">
  <div class="container">

    <h2 class="font-weight-bold">Trusted by Industry Leaders</h2> 

    <h3 class="trusted-partners">GrowByData powers the world’s largest brands, retailers and digital agencies.</h3>

    <ul class="logo-list mt-5">
      <li class="dolor-general"><picture>

        <img src="<?php echo get_template_directory_uri()?>/assets/images/Dollar_General_logo.svg" alt="dollar-general"> 
      </picture></li>

      <li class="dolor-general"><picture>
        <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/nestle.webp">

          <img src="<?php echo get_template_directory_uri()?>/assets/images/nestle.png" alt="nestle"> 
        </picture></li>   <li class="dolor-general"><picture>
         <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/nordstrom.webp">

          <img src="<?php echo get_template_directory_uri()?>/assets/images/nordstrom.png" alt="nordstrom"> 
        </picture></li>       
        <li class="dolor-general"><picture>
         <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/assets/images/express.webp">

          <img src="<?php echo get_template_directory_uri()?>/assets/images/express.png" alt="express"> 
        </picture></li>                     

       <li class="crocs mr-0"><picture>
                       <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/assets/images/crocs.webp">

                        <img data-src="<?php echo get_template_directory_uri()?>/assets/images/crocs.png" alt="crocs" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" class="lazy"> 
                      </picture></li>
      </ul>
    </div>
  </section>  

  <section class="gbd-best-choice-block background-light pt-5 pb-5">
    <div class="container">
      <div class="row">
       <div class="col-md-12 col-sm-12">
        <div class="gbd-best-choice-accordin gbd-accordin">
          <h3 class="text-center">
            <?php echo get_field('why_us_accordion_title'); ?>
          </h3>
          <div class="accordion" id="accordion">
            <?php

// Check rows exists.
            if( have_rows('gbd_best_choice_accordin') ):
    // Loop through rows.
              $i = 0;
              while( have_rows('gbd_best_choice_accordin') ) : the_row();
                $i++;
        // Load sub field value.
                ?>
                <div class="card">
                  <div class="card-header">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link accordion-toggle" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" data-parent="#accordion">
                        <i class="fas fa-arrow-circle-down"></i> 
                        <?php echo get_sub_field('accordion_title'); ?>
                      </button>              
                    </h2>
                  </div>
                  <div id="collapse<?php echo $i; ?>" class="collapse">
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
</section><!-- gbd-best-choice-block -->

</div><!-- gbd-default-template -->
<?php
get_footer();