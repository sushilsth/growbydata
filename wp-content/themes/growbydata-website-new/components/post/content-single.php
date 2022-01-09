  <?php
  /**
   * Template part for displaying posts.
   *
   * @link https://codex.wordpress.org/Template_Hierarchy
   *
   * @package growbydata_site
   */

  ?>

  <script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script>

  <div class="gbd-blog-article">
    <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1><?php the_title(); ?></h1>
      <h4>By <?php echo get_the_author(); ?></h4>
      <div class="gbd-posted-dates">
        <?php echo growbydata_blog_posted_on(); ?> 

        <div class="gbd-reading-time">
          <?php echo do_shortcode('| [rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
        </div>

      </div>

      <div class="gbd-topics-categories">
        <?php
          $category_detail = get_the_category(get_the_ID());//$post->ID
          $cat = [];
          foreach ($category_detail as $key => $value) {
            array_push($cat, $value->cat_name);
          }
          echo "TOPICS " .implode($cat, ", ");
          ?>


        </div>

        <div class="gbd-fb-twt-widget">
         <div class="gbd-twiiter-widget">
           <a href="http://twitter.com/share" class="twitter-share-button"
           data-url="<?php the_permalink(); ?>"
           data-via="wpbeginner"
           data-text="<?php the_title(); ?>"
           data-related="syedbalkhi:Founder of WPBeginner"
           data-count="no">Tweet</a>
         </div>

         <div class="fb-like" data-href="<?= get_permalink(); ?>" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="false">
         </div>
       </div>

  <!--  <?php
   $style = "";
   if (get_post_thumbnail_id(get_the_ID())):
      $tn_id = get_post_thumbnail_id(get_the_ID());
      $dimentions = wp_get_attachment_image_src($tn_id, 'large');
      if (sizeof($dimentions) >= 3):
          $style = "background : url($dimentions[0]) center center no-repeat; background-size: contain;";
          ?>
          <div class="alignleft feature-img-holder"
          style="<?php echo $style; ?> height:104px; width:200px;">
          <a href="<?php echo $dimentions[0]; ?>"
             style="display:block; height:100%; width:100%;" target="_blank">
         </a></div>
     <?php endif;
  endif;
  $post_id = get_the_ID();
  the_content(); ?> -->

  <?php
  $single_post_featured_image = get_post_meta($post->ID, 'growbydata-site-meta-checkbox', true);
  if ($single_post_featured_image == '') { ?>
  <?php if ( '' != get_the_post_thumbnail() ) : ?>
    <div class="post-thumbnail alignleft feature-img-holder">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail('growbydata-site-featured-image'); ?>
      </a>
    </div>
  <?php endif; ?>
  <?php } ?>
  <div class="entry-content">
    <?php
    the_content(); 
    ?> 
  </div>

</article><!-- #post-## -->

<div class="gbd-prev-next-articles">
  <nav class="navigation post-navigation" role="navigation">
    <h2 class="screen-reader-text">Post navigation</h2>
    <div class="nav-links">
      <div class="nav-previous">
      <?php previous_post_link('%link
      ','<span class="pre">Previous</span><div>%title</div>'); ?> </div>
                  
  <!-- 
                <?//php previous_post_link( '&laquo; %link', "<span>Previous Article:</span>" , '%title', true ); ?>
                  <?//php echo get_previous_post_link("%link","<span>Previous Article</span>"); ?>
                -->           
                <div class="blog-post">
                 <a href="<?php echo site_url(); ?>/blog">Blog Home</a>
               </div>
               <div class="nav-next">

             <?php next_post_link('%link','<span class="pre">Next</span><div>%title</div>'); ?>  </div>
    <!--                  <?//php next_post_link( '%link &raquo;', "<span>Next Article:</span>", '%title', true ); ?>

             <?//php echo get_next_post_link("%link","<span>Next Article</span>"); ?>
           </div> -->
         </div>
       </nav>
     </div>

     <div class="gbd-like-blog-post clearfix">
      <h4>Like This Blog Post?</h4>
      <span>Subscribe for future updates!</span>


      <!--   <?php //echo do_shortcode('[contact-form-7 id="997" title="Blog Subscribe"]'); ?> -->
      <!-- live Code HubSPOT -->

  <!--[if lte IE 8]>
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
   hbspt.forms.create({
    portalId: "5372895",
   formId: "058cbe04-9991-4955-9f64-f5ec8b2cb8f3"
 });
</script>
<!-- live Code HubSPOT -->



<!-- test Code HubSPOT -->

  <!--[if lte IE 8]>
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    portalId: "6867561",
    formId: "49c1ad62-d31c-4695-98df-58ed71bb52fd"
  });
</script> -->
<!-- test Code HubSPOT -->


<script type="text/javascript">
  //   jQuery(document).ready(function(){
  //    jQuery(document).on("click","#hsForm_058cbe04-9991-4955-9f64-f5ec8b2cb8f3 input[type=submit]",function(e){
  //     console.log("clicked");

  // var frm = jQuery('#hsForm_058cbe04-9991-4955-9f64-f5ec8b2cb8f3');
  //     var data = new FormData(jQuery('#hsForm_058cbe04-9991-4955-9f64-f5ec8b2cb8f3')[0]);
  //             // e.preventDefault();
  //             jQuery.ajax({
  //                 type: frm.attr('method'),
  //                 url: frm.attr('action'),
  //                 cache: false,
  //                 contentType: false,
  //                 processData: false,
  //                 data: data,
  //                 success: function (data) {
  //                     console.log('Submission was successful.');
  //                       jQuery(".gbd-like-blog-post").append("<div class='hubspotsuccessMessage'>The form was successfully submitted</div>");
  //                     setTimeout(function(){
  //                       jQuery(".hubspotsuccessMessage").hide();
  //                     },5000);

  //                     console.log(data);
  //                 },
  //                 error: function (data) {
  //                     console.log('An error occurred.');
  //                     console.log(data);
  //                 },
  //             }); 
  //             return false;
  // })
  // })
</script>

<!--  <script>
  jQuery(document).ready(function(){
  jQuery(".sgpb-popup-builder-content-html").removeAttr("style");
  });
</script>  -->



</div><!-- gbd-like-blog-post -->

</div>

<script>
  
jQuery(document).ready(function(){
   
  if(jQuery('.simplePullQuote').length){
        jQuery('.simplePullQuote').each(function(){
            var blockQuote = jQuery(this).find('p').text().trim();
          var tweetLink = 'https://twitter.com/intent/tweet?text='+ encodeURIComponent(blockQuote)+'&via=GrowByData&url='+window.location.href;
            jQuery(this).append("<a href="+tweetLink+" target='_blank' class='tweeter-ad'>Tweet this</a>");
        });
    }

})
</script>