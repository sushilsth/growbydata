<?php get_header(); ?>

<?php $eci_date = new DateTime(); ?>
<!-- <script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script> -->

<!-- <link rel="preload" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.min.css?q='. $eci_date->getTimestamp() ; ?>" as="style" onload="this.rel='stylesheet'"> -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='?>">

<Style>
@media only screen and (max-device-width:767px) and (min-device-width:320px){.gbd-download-PDF{display:none!important}}@media only screen and (min-device-width:375px) and (max-device-width:812px) and (-webkit-min-device-pixel-ratio:3){.gbd-download-PDF{display:none!important}}
</Style>

<div class="clearfix"></div>
<div class="gbd-blog-category clearfix">
	<div class="container">
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
    Blog Category
    <span class="caret"></span>
  </button>
  <ul id="blog-category" class="clearfix dropdown-menu">
   <?php
                            $category_detail = get_categories(); //$post->ID
                            $term = get_queried_object();
                            $current_category = $term->name;
                            $array_menu = wp_get_nav_menu_items("Blog Category Menu");
                            $menu = array();
                            foreach ($array_menu as $m) {
                            	if (empty($m->menu_item_parent)) {
                            		?>
                            		<li class="">
                            			<a href="<?php echo $m->url; ?>" class="filter <?php echo ($m->title == $current_category) ? "active" : ""; ?>"><?php echo $m->title; ?> 
                            		</a>
                            	</li>
                            	<?php
                            }
                          }
                          ?>
                        </ul>
                      </div>
                    </div> <!-- gbd-blog-category -->

                    <div class="gbd-breadcrumbs">
                     <div class="container">
                      <?php
                      if ( function_exists('yoast_breadcrumb') ) {
                       yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
                     }
                     ?>
                   </div>
                 </div>

                 <div class="gbd-blog-article-v3">
                   <div class="gbd-blog-article-block">
                    <div class="gbd-blog-article">
                     <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                      <div class="gbd-blog-article-titles">
                       <div class="container">
                        <h1><?php the_title(); ?></h1>
                        <div class="gbd-categories-fb-twt-widget clearfix">
                         <div class="gbd-categories-dates pull-left">
                          <div class="gbd-posted-dates">
                           <?php echo growbydata_blog_posted_on(); ?> 

                           <div class="gbd-reading-time">
                            <?php echo do_shortcode('| [rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div><!-- gbd-blog-article-titles -->

                <!-- Download PDF Section -->
                <style type="text/css">
                  .gbd-download-PDF{display: none;}
                </style>
                <div class="gbd-download-PDF">
                  <div class="container">
                   <span><?php the_title(); ?></span> 
                   <a class="" data-toggle="modal" data-target="#myModal" id="gbd-download">
                    <i class="fas fa-download" style="margin-right: 10px;"></i>
                    Download PDF
                  </a>      
                </div>

                
                
              </div>

              <!-- Modal -->
              <div class="modal fade download-article-form-wrap" id="myModal" role="dialog">
                <div class="modal-dialog">
                  
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Download Article</h4>
                    </div>
                    <div class="modal-body">
          <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js" async></script>
<![endif]-->
<script>
  <?php
  global $post;
  ?>
  var post_slug = "<?php echo $post->post_name; ?>";
  var post_id = "<?php the_ID(); ?>";
  var downloadPDF = function(){
    var t = new XMLHttpRequest;
    t.open("POST", admin_ajax, !0), t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"), t.responseType = "blob", t.onload = function() {
      if (200 === t.status) {
        var e = t.getResponseHeader("content-disposition"),
        n = /"([^"]*)"/.exec(e),
        o = null != n && n[1] ? n[1] : "file.pdf",
        d = new Blob([t.response], {
          type: "application/pdf"
        }),
        a = document.createElement("a");
        a.href = window.URL.createObjectURL(d), a.download = o, document.body.appendChild(a), a.click(), document.body.removeChild(a)
      }
    }, t.send("action=download_blog_content&postid=" + post_id + "&postslug=" + post_slug)
  };
</script>


<div id="downloadPDFForm"></div>

<script type="text/javascript">
  function HubspotFormLoad(file) {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.charset = "utf-8";
    script.defer = true;
    script.src = file;
    script.onload = function() {
            //for download PDF
            if (document.querySelectorAll("#downloadPDFForm .hbspt-form").length == 0) {
                // console.log("download pdf form");
                var script1 = document.createElement("script");
                script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Download PDF Form')); ?>',onFormSubmit: downloadPDF})";
                document.getElementById("downloadPDFForm").appendChild(script1);
              }
            };

            document.body.appendChild(script);
          }
        </script>


      </div>
    </div>

  </div>
</div>
<!-- End Download PDF Section -->

<div class="container">
 <div class="gbd-blog-container">

  <div class="gbd-featured-article-image">
   <?php
   $post_id = $post->ID;
   $single_post_featured_image = get_post_meta($post->ID, 'growbydata-site-meta-checkbox', true);
   if ($single_post_featured_image == '') { ?>
    <?php if ( '' != get_the_post_thumbnail() ) : ?>
     <div class="gbd-post-thumbnail feature-img-holder">
      <!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
       <?php the_post_thumbnail('growbydata-site-featured-image'); ?>
       <!-- </a> -->
     </div>
   <?php endif; ?>
 <?php } ?>
 <?php 
 wpb_set_post_views(get_the_ID());
 ?>
</div>			

<div class="gbd-abstract-load">

  <?php if ( has_excerpt() ) { the_excerpt(); } else { echo ''; } ?>

</div>
<div class="entry-content" id="entry-content">
  <?php if(get_the_ID() == "6436"){ ?>
  <?php
  require_once get_template_directory().'/library/Mobile_Detect.php';
  $detect = new Mobile_Detect;
  // Any mobile device (phones or tablets).
  if ( $detect->isMobile() ) {
    ?>
      <script>
var w;
function startWorker() {
  if (typeof(Worker) !== "undefined") {
    if (typeof(w) == "undefined") {
      w = new Worker("<?php echo get_template_directory_uri() . '/assets/blog-workers.js'; ?>");
    }
    w.postMessage(post_id+ "|"+admin_ajax);
    w.onmessage = function(event) {
      document.getElementById("entry-content").innerHTML = event.data;
      //tweet simple quote
        // if(jQuery('.simplePullQuote').length){
        //   jQuery('.simplePullQuote').each(function(){
        //     var blockQuote = jQuery(this).find('p').text().trim();
        //     var tweetLink = 'https://twitter.com/intent/tweet?text='+ encodeURIComponent(blockQuote)+'&via=GrowByData&url='+window.location.href;
        //     jQuery(this).append("<a href="+tweetLink+" target='_blank' class='tweeter-ad'>Tweet this</a>");
        //   });
        // }
    };
  } else {
    document.getElementById("entry-content").innerHTML = "Sorry! No Web Worker support.";
  }
}
startWorker();
</script>
<?php 
  } else {
       the_content();  
  }

  ?> 
<?php } else {
  the_content();
} ?>
</div>

<div class="gbd-tags-post clearfix">
  <div class="gbd-blog-tags">
   <?php
   $posttags = get_the_tags();
   if ($posttags) {
    ?>
    <i class="fa fa-tags" aria-hidden="true"></i>
    <?php
    foreach ($posttags as $tag) {
     echo "<span><a href='".get_tag_link($tag->term_id)."'>" . $tag->name . "</a></span>";
     if (next($posttags)) {
                                                    echo ', '; // Add comma for all elements instead of last
                                                  }
                                                }
                                              }
                                              ?>
                                            </div>
                                          </div>

                                          <div class="gbd-blog-writer">
                                           <h4>
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            <span><?php echo get_the_author(); ?></span>
                                          </h4>
                                          <p><?php echo get_the_author_meta('description'); ?></p>
                                        </div>
                                        <div class="gbd-blog-forgot-share">
                                          <h4>Don't Forget to share what you have learned</h4>
                                          <?php //echo do_shortcode("[addtoany]") ?>
                                          <div class="gbd-addtoany">
                                            <style type="text/css">
                                              .gbd-addtoany .fab,
                                              .gbd-addtoany .fas {
                                                font-size: 42px;
                                              }
                                              .gbd-addtoany .gbd-download .fas,
                                              .gbd-addtoany .gbd-print .fas {
                                                font-size: 38px;
                                              }

                                              .gbd-addtoany li {
                                                display: inline-block;
                                                margin: 0 10px 5px;
                                                vertical-align: top;
                                              }
                                            </style>
                                            <ul>
                                              <li>
                                                <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
                                                <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>" onclick="return fbs_click()" target="_blank" rel=noopener>
                                                  <i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                              <?php $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
                                              <a target="_blank" rel=noopener class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"> 
                                                <i class="fab fa-twitter-square"></i>
                                              </a>

                                            </li>
                                            <li>
                                              <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_permalink(); ?>" target="_blank" rel=noopener>
                                                <i class="fab fa-linkedin"></i>
                                              </a>
                                            </li>
                                          </ul>

                                        </div>
                                      </div>



                                      <?php
                                      if(comments_open()){  ?>
                                        <div class="comment-wrapper" style="margin-top:40px; margin-bottom: 40px;">

                                         <?php comments_template();  ?> 



                                       </div>      
                                     <?php }  
                                     ?>
                                   </div>

                                 </div>

                                 <div class="gbd-related-articles-block">
                                   <div class="container">
                                    <h4>
                                     <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                   You may also Like</h4>
                                   <div class="gbd-related-blog-block clearfix">
                                     <?php
                                     global $post;
                                     $postcat = get_the_category( $post->ID );
                                     $categories_id = [];
                                     foreach($postcat as $cat){
                                      array_push($categories_id, $cat->term_id);
                                    }
                                    // var_dump($categories_id);
                                    $args = array(
                                      'post__not_in' => array($post->ID),
                                      'posts_per_page' => 3,
                                      'post_status' => 'publish',
                                      'post_type'   => 'post',
                                      'orderby' => 'date',
                                      'order'   => 'DESC',
                                      'category__in' => $categories_id
                                    );
                                    $custom_loop = new WP_Query($args); 
                                    if ( $custom_loop->have_posts() ) : 
                                      while ($custom_loop->have_posts()) : $custom_loop->the_post();
                                       if($post_id != get_the_ID()):
                                        ?>
                                        <div class="gbd-related-blog fadeIn">
                                          <div class="gbd-featured-blog-img">
                                            <div class="gbd-featured-category-like clearfix">
                                              <div class="gbd-featured-category-detail">
                                                <?php
                                                $blog_type = wp_get_object_terms($post->ID, 'blog_type', array('fields' => 'names'));
                                                echo (!empty($blog_type)) ? $blog_type[0] : "Article";
                                                ?>
                                              </div>
                                            </div>
                                            <?php
                                            $url = get_the_post_thumbnail_url();
                                            $uploads = wp_upload_dir();
                                            $file_path = str_replace($uploads['baseurl'], $uploads['basedir'], $url);
                                            ?>

                                            <?php if ('' != get_the_post_thumbnail() && file_exists($file_path)) : ?>
                                            <div class="post-thumbnail " data-mh="equal-height">
                                              <a href="<?php the_permalink(); ?>">
                                                <?php
                                                $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                                                ?>
                                                <img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('4899', 'full'))) ?  wp_get_attachment_image_src('4899', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
                                                <?php //the_post_thumbnail('growbydata-site-featured-image'); ?>
                                              </a>
                                            </div>
                                          <?php endif; ?>
                                        </div>

                                        <div class='gbd-header-content-blog <?php echo (!file_exists($file_path)) ? "gbd-blog-fullwidth" : ""; ?>'>
                                          <header class="entry-header">
                                            <?php
                                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a></h2>');

                                            if ('post' === get_post_type()) :
                                              ?>
                                              <?php // get_template_part( 'components/post/content', 'meta' ); ?>
                                            <?php endif;
                                            ?>

                                            <div class="entry-meta">
                                              <?php growbydata_blog_posted_on(); ?>
                                            </div>

                                            <div class="gbd-reading-time">
                                              <span class="separator">|</span> 
                                              <?php echo do_shortcode('[rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                                            </div>
                                            <div class="gbd-blog-tags">

                                              <?php
                                              $posttags = get_the_tags();
                                              if ($posttags) {
                                                ?>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <?php
                                                foreach ($posttags as $tag) {
                                                  echo "<span><a href='".get_tag_link($tag->term_id)."'>" . $tag->name . "</a></span>";
                                                  if (next($posttags)) {
                                                    echo ', '; // Add comma for all elements instead of last
                                                  }
                                                }
                                              }
                                              ?>
                                            </div>
                                          </header>
                                        </div><!-- gbd-header-content-blogs -->

                                      </div>
                                      <?php
                                    endif;
                                  endwhile;
                                  wp_reset_postdata();
                                endif;
                                ?>
                              </div>
                            </div>
                          </div><!-- gbd-related-articles-block -->

                          <div class="gbd-subscribe-blog-post clearfix">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                           <div class="gbd-blog-container text-center">
                            <h4>Like Our Post?</h4>
                            <span>Receive Latest Insights In Your Inbox</span>
                            <div class="clearfix"></div>
                            
                            <div id="blog-pg-latest-insights-form"></div>		
                            <script type="text/javascript">
                              function HubspotFormLoad1(file) {
                                var script = document.createElement("script");
                                script.type = "text/javascript";
                                script.charset = "utf-8";
                                script.defer = true;
                                script.src = file;
                                script.onload = function() {

            //for like our post
            if (document.querySelectorAll("#blog-pg-latest-insights-form .hbspt-form").length == 0) {
                // console.log("Like our post form");
                var hbsptobj = JSON.stringify( <?php includeWithVariables('hubspotForms.php', array('formName' => 'Blog Sign up Form')); ?> );
                var script2 = document.createElement("script");
                script2.innerHTML = "hbspt.forms.create(" + hbsptobj + ");";
                document.getElementById("blog-pg-latest-insights-form").appendChild(script2);
              }
            };

            document.body.appendChild(script);
          }
        </script>		
      </div>
    </div><!-- gbd-subscribe-blog-post -->

    <div class="gbd-footer-subscribe gbd-news-section gbd-blog-news-section">
     <div class="container">
      <span>Our Coverage in Top Publications</span>
<!-- <p>Get our Latest Media Coverage and  News</P>
-->
<div class="brands news-logos">
  <div  class="brand-logo white slideInUp">   <span>
    <picture class="lazyload">
      <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg.webp">
        <img data-src="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg" alt="digital-commerce-360"> 
      </picture>
    </span></div>
    <div class="brand-logo white slideInUp">   <span>
      <picture class="lazyload">
        <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg.webp">
          <img data-src="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg"  alt="retail-touchpoints"> 
        </picture>
      </span></div>
      <div class="brand-logo white slideInUp">   <span>
        <picture class="lazyload">
          <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/total_retail_black.png.webp">
            <img data-src="<?php echo get_template_directory_uri()?>/images/total_retail_black.png" alt="totalretail"> 
          </picture>
        </span></div>
        <div class="brand-logo white slideInUp">   <span>
          <picture class="lazyload">
            <source type="image/webp" data-srcset="<?php echo get_template_directory_uri()?>/images/retail-times-be.webp">
              <img data-src="<?php echo get_template_directory_uri()?>/images/retail-times-be.png" alt="retailtimes">
            </picture>
          </span></div>
        </div>
      </div>
    </div><!-- .gbd-blog-news-section -->

    <?php get_template_part('components/post/blog', 'footer-slider'); ?>

  </article><!-- #post-## -->

</div><!-- gbd-blog-article -->

</div><!-- gbd-blog-article-block -->

</div><!-- gbd-blog-article-v3 -->

<script type = "text/javascript">
  setTimeout(function() {
    HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
    HubspotFormLoad1("//js.hsforms.net/forms/v2.js");      
  }, 5000);
</script>
<script>
function checkmbl(){var i=!1;return(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))&&(i=!0),i}checkmbl()&&document.getElementsByClassName("gbd-download-PDF")[0].classList.add("hide");
</script>