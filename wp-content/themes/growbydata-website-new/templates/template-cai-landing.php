<?php
/*
Template Name: Competitive Ad Intelligence-signup
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
<!--  <?php if (have_rows('Ad_Intelligence_Competitive_Edge_block')): ?>
  <div class="container">
    <h2>Ad Intelligence Gives You a Competitive Edge</h2>
    <div class="block_wrapper"> 
      <div class="row">
        <?php while (have_rows('Ad_Intelligence_Competitive_Edge_block')): the_row();
          $image = get_sub_field('Ad_Intelligence_Competitive_Edge_image');
          $name = get_sub_field('Ad_Intelligence_Competitive_Edge_name');
          $description = get_sub_field('Ad_Intelligence_Competitive_Edge_description');
          ?>


          <div class="col-md-4 col-xs-12 ad_intelligence_block fadeIn">
            <div class="image_wrapper">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>      
            </div>

            <h3><?php echo $name; ?></h3>
            <div class="text-wrapper">
              <span><?php echo $description; ?> </span>
            </div>
          </div>
        <?php endwhile; ?>  

      </div>
    </div>
  </div>
  <?php endif; ?> -->

  <div class="container">
    <h2>Ad Intelligence Gives You a Competitive Edge</h2>
    <div class="block_wrapper"> 
      <div class="row">
        

        <div class="col-md-4 col-xs-12 fadeIn">
          <div class="ad_intelligence_block">
          <div class="image_wrapper">
            <img src="<?php echo get_template_directory_uri()?>/images/grow-sales.png" alt="grow-sales">      
          </div>

          <h3>Grow Sales</h3>
          <div class="text-wrapper">
            <span><p>Be notified immediately when your ads stop showing.</p>
            </span>
          </div>
        </div>
</div>
        

        <div class="col-md-4 col-xs-12 fadeIn">
          <div class="ad_intelligence_block">
          <div class="image_wrapper">
            <img src="<?php echo get_template_directory_uri()?>/images/CTR.png" alt="CTR">      
          </div>

          <h3>Increase Click Through <br/>Rate</h3>
          <div class="text-wrapper">
            <span><p>Price is everything.  Our technology scans every auction and alerts you when your ad’s price is much higher than the competition.
</p>
            </span>
          </div>
        </div>
</div>
        

        <div class="col-md-4 col-xs-12 fadeIn">
          <div class="ad_intelligence_block">
          <div class="image_wrapper">
            <img src="<?php echo get_template_directory_uri()?>/images/visibility.png" alt="visibility">      
          </div>

          <h3>Get Visibility of your <br>Competitors </h3>
          <div class="text-wrapper">
            <span><p>Competitive sets are different across offline to online from one channel to the next.  Our technology replicates actual user searches and shows you who your competitors are, their visibility and their trends over time.
</p>
            </span>
          </div>
        </div>
</div>
        

      </div>
    </div>
  </div>

</div><!-- ad_intelligence-text -->

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
