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

<div class="gbd-blog-category-title">
    <div class="container">
        <h1><?php echo single_cat_title('', false) ?></h1>
        <?php if(is_tag()){ ?>
            <h3><?php
            $categories = get_the_tags();
            echo $categories[0]->description;
            ?></h3>
        <?php } else { ?>
        <h3><?php
            $categories = get_the_category();
            echo $categories[0]->description;
            ?></h3>
        <?php } ?>
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

                <div class="gbd-blog-category">
                    <div class="container">
                        <ul id="blog-category" class="clearfix">
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
                </div><!-- gbd-blog-category -->


                
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
                <h4>Did You Like Our Post?</h4>
                <span>Subscribe To Recieve Latest Insights In Your Inbox</span>

                <div class="clearfix"></div>
                <!--   <?php //echo do_shortcode('[contact-form-7 id="997" title="Blog Subscribe"]');     ?> -->
                <!-- live Code HubSPOT -->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
    portalId: "5372895",
    formId: "266756a8-ab84-4f65-a325-df5ac2c0a741"
});
</script>
                <!-- live Code HubSPOT -->
            </div>
        </div><!-- gbd-subscribe-blog-post -->


        <?php get_template_part('components/post/blog', 'footer-slider'); ?>
    </main>
</div>


<?php
get_footer();
