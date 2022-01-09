<?php
/*
  Template Name: Press
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>


<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="gbd-Press container-small">
                <header class="entry-header">
                    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                </header>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $data = new WP_Query(array(
                    'post_type' => 'news', // your post type name
                    'posts_per_page' => 9, // post per page
                    'paged' => $paged,
                ));
                ?>


                <?php
                if ($data->have_posts()) {
                    while ($data->have_posts()) : $data->the_post();
                        ?>
                        <div class="gbd-Press-content_wrapper col-md-4 col-sm-12">

                            <div class="gbd-Press-content fadeIn">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'category_news');
                                $term_id = $terms[0]->term_id;
                                ?>
                                <!--   <h5><?php //echo $terms[0]->name;  ?>
                                  </h5> -->
                                <span class="imgwrap">
                                    <img src="<?php echo get_field('cat_logo', $terms[0]->taxonomy . '_' . $term_id); ?> " alt="<?php echo $terms[0]->name;  ?>">
                                </span>
<div class="press_content-inner">
      <div class="entry-meta post-date"><?php echo get_post_meta($post->ID, 'date', true); ?></div>
                                <h4><a href="<?php echo get_post_meta($post->ID, 'read_more', true); ?>" target="_blank"><?php the_title(); ?></a>
                                </h4>
                              
<!--                                 <div><?php //echo press_content(10); ?></div>
 -->                                <div class="gbd-video-wrapper">
                                    <?php if (get_post_meta($post->ID, 'you-tube-url', true) != "") { ?>
                                        <div class="entry-meta col-md-1"> <iframe  src="<?php echo get_post_meta($post->ID, 'you-tube-url', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                                    <?php } ?>
                                </div>
                                <div class="clearfix"></div>
                            <!--     <a href="<?php //echo get_post_meta($post->ID, 'read_more', true); ?>"
                                   target="_blank"> READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                            </div>
                          </div>
                        </div>
                    <?php endwhile; ?>
                     <div class="clearfix"></div>

                    <div class="gbd-pagination">

                        <?php
                        $total_pages = $data->max_num_pages;

                        if ($total_pages > 1) {

                            $current_page = max(1, get_query_var('paged'));
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text' => __('« Prev'),
                                'next_text' => __('Next »'),
                                    )
                            );
                        }
                        ?>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                    ?> 

            </div>
        </main>
    </div>
</div>

<?php
get_footer();
