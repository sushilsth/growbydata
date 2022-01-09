<?php
/*
Template Name: Competitive Ad Intelligence-signup_EMAIL
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
  <div class="entry-content-page">
    <?php the_content(); ?>
  </div>
  <?php
endwhile;
wp_reset_query();
?>


<div class="clearfix"></div>
<div class="ad_intelligence-text">
  <?php if (have_rows('Ad_Intelligence_block')): ?>
    <div class="container">
      <h2>What will we do?</h2>
      <div class="block_wrapper"> 
        <div class="row">
          <div class="col-md-7 col-md-offset-3">
            <div class="row">
              <?php while (have_rows('Ad_Intelligence_block')): the_row();
                $image = get_sub_field('Ad_Intelligence_image');
                $name = get_sub_field('Ad_Intelligence_name');
            // $description = get_sub_field('Ad_Intelligence_description');
                ?>
                <div class="col-md-5 col-xs-12 ad_intelligence_block fadeIn">
                  <div class="image_wrapper">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>     
                  </div>
                  <h3><?php echo $name; ?></h3>
              <!-- <div class="text-wrapper">
                <span><?php echo $description; ?> </span>
              </div> -->
            </div>
          <?php endwhile; ?>  
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?> 

</div>

<!--brand logo LIST STARTS HERE-->
<div class="gbd-footer-subscribe gbd-news-section">
 <div class="container">
  <h3>As Seen In</h3>
<!-- <p>Get our Latest Media Coverage and  News</P>
-->
<div class="brands news-logos">



  
  <div  class="brand-logo white slideInUp">   <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/digital-commerce.png" alt="digital-commerce-360"> 
                            </span></div>
   <div class="brand-logo white slideInUp">   <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/retail-touchpoints.png" alt="retail-touchpoints"> 
                            </span></div>
    <div class="brand-logo white slideInUp">   <span>
                                <img src="<?php echo get_template_directory_uri()?>/images/total_retail.png" alt="totalretail"> 
                            </span></div>
  </div>

</div>

</div>

<!--brand logo LIST STARTS HERE-->
<!--LEADER LIST STARTS HERE-->
<div class="gbd-leaders">

  <div class="container"> <div class="row">
    <span class="gbd-allcaps gbd-niche slideToggler1 slideSign2">Trusted By Leading Online Retailers and Agencies</span>
    <section class="customer-logos slider">
     <div class="slide"><div class="slide-item"><span> <img src="<?php echo get_template_directory_uri()?>/images/footer-logo/century-21-logo.png" alt="century-21-logo"> </span></div></div>
     <div class="slide"><div class="slide-item"><span> <img src="<?php echo get_template_directory_uri()?>/images/footer-logo/american-muscle-ford.png" alt="american-muscle"> </span></div></div>
     <div class="slide"><div class="slide-item"><span> <img src="<?php echo get_template_directory_uri()?>/images/footer-logo/barneys-new-york-logo.png" alt="barneys-new-york-logo"></span></div> </div>
     <div class="slide"><div class="slide-item"><span> <img src="<?php echo get_template_directory_uri()?>/images/footer-logo/greek-gear.png" alt="totalretail"> </span></div></div>
     <div class="slide"> <div class="slide-item"><span><img src="<?php echo get_template_directory_uri()?>/images/footer-logo/neiman-marcus-logo.png" alt="neiman-marcus"></span></div> </div>
     <div class="slide"> <div class="slide-item"><span><img src="<?php echo get_template_directory_uri()?>/images/footer-logo/dollar-general-logo.png" alt="dollar-general-logo"></span></div> </div>
     <div class="slide"> <div class="slide-item"><span><img src="<?php echo get_template_directory_uri()?>/images/footer-logo/skygeek-logo.png" alt="skygeek-logo"></span></div> </div>
     <div class="slide"> <div class="slide-item"><span><img src="<?php echo get_template_directory_uri()?>/images/footer-logo/rrs-logo.png" alt="rrs-logo"></span></div> </div>
     <div class="slide"> <div class="slide-item"><span><img src="<?php echo get_template_directory_uri()?>/images/footer-logo/sourceorthologo.png" alt="sourceortho"></span></div> </div>

   </section>

 </div>
</div>
</div> 
<!--LEADER LIST ENDS HERE-->



<div class="clear"></div>
<!-- <div class="recent-articles-Wrapper recent-article-cai">
  <div class="container">
    <h2>Recent Articles on Competitive Insights</h2>

    <div class="subscribe-blog-wrapper">
      <?php
      $arr = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'post_status' => 'publish',
        'posts_per_page' => '4'
      );
      $the_query = new WP_Query( $arr );

      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          ?>
          <div class="subcribe-blog">
            <div class="gbd-featured-blog-img">
              <a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank"> 
                <?php 
                $url = get_the_post_thumbnail_url();
                $uploads = wp_upload_dir();
                $file_path = str_replace( $uploads['baseurl'], $uploads['basedir'], $url );

                if ( '' != get_the_post_thumbnail() && file_exists($file_path)) :
                 the_post_thumbnail( 'growbydata-site-featured-image' );
             endif; ?>
           </a>
         </div>

         <div class="gbd-featured-category-like clearfix">
          <div class="gbd-featured-category-detail">
           <?php
        $category_detail = get_the_category(get_the_ID());//$post->ID
        echo $category_detail[0]->cat_name;
        ?>                          
      </div>
    </div>

    <div class="gbd-featured-blog-contents">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank"> <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h2>' ); ?></a></h2>                                   

      <div class="gbd-featured-blog-text">
       <a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank" style="color:inherit;"> <?php echo excerpt(20);  ?> </a>                            
     </div>

   </div>

 </div>
<?php } } ?>
</div>
</div>
</div>
<div class="gbd-footer-subscribe">
 <div class="container">
  <h4>Your Competitive Insights are waiting</h4>
  <a class="subscribe-btn" data-toggle="modal" data-target="#maillistbtn">Subscribe</a>
  <?php include_once( 'icontact-main.php' ); ?>
</div>
</div> -->

<script> if(sessionStorage.getItem("hubspotsuccessMessage") != null){
 jQuery("#form-wrapper-right").prepend("<div class='hubspotsuccessMessage'>"+sessionStorage.getItem("hubspotsuccessMessage")+"</div>");
 sessionStorage.removeItem("hubspotsuccessMessage");
}</script>


<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.customer-logos').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [
      {
        breakpoint: 1030,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 4,
          infinite: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
});</script>

<script type="text/javascript">jQuery(document).on('keypress',"textarea[id*=keywords_you_want]", function(){
    var words = jQuery("textarea[id*=keywords_you_want]").val().match(/\b\S+\b/g);
    var max = 10;
    if(words && words.length > max){
        // Maximum exceeded
        if(jQuery("#gbd-custom-form-msg").length == 0){
            jQuery('<ul id="gbd-custom-form-msg" class="no-list hs-error-msgs inputs-list" style="display:block;" role="alert"><li><label class="hs-error-msg">Please enter only 10 keywords.</label></li></ul>').insertAfter("div[data-reactid*=keywords_you_want]");
        }
        return false;
    }
});</script>
  <?php
  get_footer();
