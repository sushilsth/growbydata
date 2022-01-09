<?php $eci_date = new DateTime(); ?>
<!-- <link rel="stylesheet" href="<?php //echo get_template_directory_uri() . '/assets/css/blog-style.css?q='. $eci_date->getTimestamp() ; ?>"> -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='?>">


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="gbd-blog-wrapper">
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

          <?php
          if (have_posts()) :
            $growbydata_blog_post_counter = 1;
            if (is_home() && !is_front_page()) :
                ?>
            <header class="entry-header">
                <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>


            </header>   
            <div class="entry-content-page">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
                <p>The latest news and insights to keep you up to date.</p>
            </div>


            <?php
        endif;
        ?>

        <?php get_template_part('components/post/content', 'list-parts'); ?>


        <?php
    else :
        get_template_part('components/post/content', 'none');
    endif;
    ?>
</div><!-- gbd-blog-wrapper -->


<div class="gbd-subscribe-blog-post clearfix">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    <div class="gbd-blog-container text-center">
      <h4>Like Our Post?</h4>
      <span>Receive Latest Insights In Your Inbox</span>
        <div class="clearfix"></div>
        <div id="like_our_post_form">
        <script>
            function loadjs(file) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.charset = "utf-8";
            script.async = true;
            script.src = file;
            script.onload = function(){
              if (document.querySelectorAll("#like_our_post_form .hbspt-form").length == 0){
                  hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array('formName'=>'Blog Sign up Form')); ?>);
              }
            };
            document.body.appendChild(script);
         }

        setTimeout(function() {
            loadjs("//js.hsforms.net/forms/v2.js"); 
        }, 5000);
         
        </script>
        </div>             
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

<?php get_template_part('components/post/blog', 'footer-static-slider'); ?>

</main>
</div>