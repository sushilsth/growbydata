
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package growbydata_site
 */
global $growbydata_blog_post_counter;

get_header();
?>
<?php $eci_date = new DateTime(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/blog-css.css?q='. $eci_date->getTimestamp() ; ?>">
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

          <div class="gbd-blog-category-title">
            <div class="container">
                <h1><?php echo single_cat_title('', false) ?></h1>
                <?php echo category_description(); ?>
            </div>
        </div>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="gbd-blog-wrapper">
                    <?php
                    if (have_posts()) :
                        $growbydata_blog_post_counter = 1;
                        if (is_home() && !is_front_page()) :
                            ?>
                        <header class="entry-header">
                            <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>


                        </header>   
                        <div class="entry-content-page">
                            <h2 class="page-title"><?php single_post_title(); ?></h2>
                            <h3>The latest news and insights to keep you up to date.</h3>
                        </div>


                        <?php
                    endif;
                    ?>

                    <?php
                    if (have_posts()) :

                        get_template_part('components/post/content', get_post_format());

                    else :

                        get_template_part('components/post/content', 'none');

                    endif;
                    ?>

                <?php endif;
                ?>
            </div><!-- gbd-blog-wrapper -->

            <div class="gbd-subscribe-blog-post clearfix">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <div class="gbd-blog-container text-center">
                    <h4>Like Our Post?</h4>
                    <span>Receive Latest Insights In Your Inbox</span>

                    <div class="clearfix"></div>
                    <div id="blog-signup-form"></div>
                    <script>
                       

                         function HubspotFormLoad(file) {
                            var script = document.createElement("script");
                            script.type = "text/javascript";
                            script.charset = "utf-8";
                            script.defer = true;
                            script.src = file;
                            script.onload = function() {
                                //for download PDF
                                if (document.querySelectorAll("#blog-signup-form .hbspt-form").length == 0) {
                                     hbspt.forms.create(<?php includeWithVariables('hubspotForms.php', array("formName"=>"Blog Sign up Form")); ?>);
                                }
                            };

                            document.body.appendChild(script);
                        }

                        setTimeout(function(){
                            HubspotFormLoad("//js.hsforms.net/forms/v2.js");      
                        },5000);

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
    <picture>
      <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg.webp">
        <img src="<?php echo get_template_directory_uri()?>/images/digital-commerce-black.jpg" alt="digital-commerce-360"> 
      </picture>
    </span></div>
    <div class="brand-logo white slideInUp">   <span>
      <picture>
        <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg.webp">
          <img src="<?php echo get_template_directory_uri()?>/images/retail-touchpoints-black.jpg"  alt="retail-touchpoints"> 
        </picture>
      </span></div>
      <div class="brand-logo white slideInUp">   <span>
        <picture>
          <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/total_retail_black.png.webp">
            <img src="<?php echo get_template_directory_uri()?>/images/total_retail_black.png" alt="totalretail"> 
          </picture>
        </span></div>
        <div class="brand-logo white slideInUp">   <span>
          <picture>
            <source type="image/webp" srcset="<?php echo get_template_directory_uri()?>/images/retail-times-be.webp">
              <img src="<?php echo get_template_directory_uri()?>/images/retail-times-be.png" alt="retailtimes">
            </picture>
          </span></div>
        </div>
</div>
</div><!-- .gbd-blog-news-section -->

<?php get_template_part('components/post/blog', 'footer-slider'); ?>
</main>
</div>

<?php
get_footer();
