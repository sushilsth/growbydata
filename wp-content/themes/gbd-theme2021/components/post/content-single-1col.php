<?php get_header(); ?>

<?php $eci_date = new DateTime(); ?>

<div class="clearfix"></div>
<div class="gbd-blog-category clearfix">
 <div class="container">
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
    Blog Category
    <span class="caret"></span>
  </button>
  <ul id="blog-category" class="clearfix dropdown-menu" >
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
                                  <a href="<?php echo $m->url; ?>" clss="filter <?php echo ($m->title == $current_category) ? "active" : ""; ?>"><?php echo $m->title; ?> 
                                </a>
                              </li>
                              <?php
                            }
                          }
                          ?>
                        </ul>

                        <div class="search_wrapper"> 
                          <div class="search-toggle" for="searchbox-input">
                            <i class="fa fa-search" aria-hidden="true"  style="display: block;"></i>
                            <i class="fa fa-times" aria-hidden="true"  style="display: none;"></i>        
                          </div>
                          <div class="search-bar" style="display: none;"><?php get_search_form(); ?>
                          <!--we'll fill this later with our dynamic data-->
                          <ul id="header_search_result"></ul>
                        </div>
                      </div>

                    </div>
                  </div> <!-- gbd-blog-category -->

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
                           <?php //echo growbydata_blog_posted_on(); ?> 
                           <?php the_time(get_option('date_format')) ?>
                           <style>.gbd-download-PDF{display: none;}</style>
                           <div class="gbd-reading-time">
                            <?php echo do_shortcode('| [rt_reading_time  postfix="MIN" postfix_singular="MIN" label="READ"]'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- gbd-blog-article-titles -->

                <!-- Download PDF Section -->
                
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
                <div class="modal-dialog modal-dialog-centered">
                  
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Download Article</h4>                     
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

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

<div class="container  container-small">
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
 //wpb_set_post_views(get_the_ID());
 ?>
</div>			

<div class="gbd-abstract-load">

  <?php if ( has_excerpt() ) { the_excerpt(); } else { echo ''; } ?>

</div>
<div class="entry-content" id="entry-content">
  <?php
  the_content();
  ?>
</div>


 <div class="gbd-blog-talkto-expert text-center my-5 py-5 px-5 text-white">
  <h4 class="mb-3">Need to discuss your strategy?</h4>
  <a href="<?php echo site_url('/talk-to-expert/?utm_source=growbydata&utm_medium=website&utm_campaign=web_conversion_optimization&utm_content= blog_body &utm_term=schedule_a_free_demo'); ?>" class="btn px-5 py-3 orange_btn" style="color:#252527"> Schedule a Consult</a>

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
                                            
                                            <ul>
                                              <li>
                                                <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script>
                                                <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>" onclick="return fbs_click()" target="_blank" rel="noopener nofollow">
                                                  <i class="fab fa-facebook-square"></i></a>
                                                </li>
                                                <li>
                                                  <?php $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
                                                  <a target="_blank" rel="noopener nofollow" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"> 
                                                    <i class="fab fa-twitter-square"></i>
                                                  </a>

                                                </li>
                                                <li>
                                                  <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_permalink(); ?>" target="_blank" rel="noopener nofollow">
                                                    <i class="fab fa-linkedin"></i>
                                                  </a>
                                                </li>
                                              </ul>

                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <!-- Related Block article start -->
                                      <div class="gbd-related-articles-block">
                                       <div class="container">
                                        <h2 class="text-center mb-5">
                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                       You may also Like</h2>
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
                                            <div class="gbd-related-blog fadeIn"  data-mh="equal-height">
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
                                                    <img data-src="<?php echo $imgthumb[0]; ?>" src="<?php echo (is_array(wp_get_attachment_image_src('8004', 'full'))) ?  wp_get_attachment_image_src('8004', 'full')[0] : ''; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>" class="lazyload lazy">
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

                                                <div class="entry-meta post-date">
                                                  <?php the_time(get_option('date_format')) ?>
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
                          </div><!-- gbd-related-articles-block end -->

                          <div class="gbd-subscribe-blog-post clearfix">
                           <div class="gbd-blog-container text-center">
                            <h4 class="font-weight-bold">Like Our Content?</h4>
                            <span class="font-weight-bold mb-3">Receive Latest Insights In Your Inbox</span>
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
<!-- Modal popup form -->
<style>
 #Special-offer-popup{
  z-index: 99999;
}
#Special-offer-popup input.hs-button.primary.large {
  height: auto;
  font-size: 18px!important;
}
#Special-offer-popup label span {
  color: #272727;
}
#Special-offer-popup .submitted-message {
  text-align: center;
  padding: 40px;
  font-size: 24px;
  font-weight: bold;
  color: #4caf50;
}
</style>
<div id="Special-offer-popup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="maillistLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:20px 20px 30px 20px;" id="special-offers-hs-form-here">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>              
      <script>
        var form = document.getElementById("gbd-single-cyber-monday");
        if(form){
          form.onsubmit = function() {
            return false;
          }
          setTimeout(function() {
            HubspotFormLoadForSpecialOffers("//js.hsforms.net/forms/v2.js");       
          }, 5000);
        }
        function HubspotFormLoadForSpecialOffers(file) {
          var script = document.createElement("script");
          script.type = "text/javascript";
          script.charset = "utf-8";
          script.defer = true;
          script.src = file;
          script.onload = function() {
                //for getting url
                if (document.querySelectorAll("#special-offers-hs-form-here .hbspt-form").length == 0) {
                    // console.log("for getting url");
                    var script1 = document.createElement("script");
                    script1.innerHTML = "hbspt.forms.create({portalId: '5372895',formId: '<?php includeWithVariables('hubspotForms.php', array('formName'=>'Latest Special Offer Form')); ?>',onFormSubmit: redirectAfterComplete})";
                    document.getElementById("special-offers-hs-form-here").appendChild(script1);
                  }
                };
                document.body.appendChild(script);
              }
              function redirectAfterComplete(){
                var keywordObj = document.getElementById("keyword_group");
                var val = keywordObj.value.replace("&", "%26");        
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    var res = JSON.parse(this.response);
                    if(res.status){
                      location.href = res.url
                        // window.open(res.url);
                        console.log('Redirecting');
                      }            
                    }
                  };
                  xhttp.open("GET", admin_ajax+"?action=getofferurl&value="+val, true);
                  xhttp.send();
                }
              </script> 
            </div>
          </div>
        </div>
<!-- END Modal popup form -->