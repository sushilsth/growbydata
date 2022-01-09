<?php
/*
Template Name: Press New
 *
 * @package Growbydata Site
 * @since Growbydata Site 1.0.4
 */
?>
<?php get_header(); ?>


<div class="container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="gbd-Press">
 <header class="entry-header">
                    <?php the_title('<h2 class="page-title">', '</h2>'); ?>
                </header>

                <?php
                while (have_posts()) : the_post(); ?>
                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$data= new WP_Query(array(
    'post_type'=>'news', // your post type name
    'posts_per_page' => 3, // post per page
    'paged' => $paged,
));
?>


<?php
if ( $data->have_posts() ) {
while ( $data->have_posts() ) : $data->the_post(); ?>
        <div class="gbd-Press-content_wrapper">

          <div class="entry-meta col-md-1 fadeIn"><?php echo get_post_meta($post->ID, 'date', true); ?></div>
          <div class="col-md-11 gbd-Press-content fadeIn">
          <h5><?php echo (wp_get_object_terms(get_the_ID(), 'category_news')[0]->name)? wp_get_object_terms(get_the_ID(), 'category_news')[0]->name : ""; ?>
          </h5>
          <h4><a href="<?php echo get_post_meta($post->ID, 'read_more', true); ?>" target="_blank"><?php the_title(); ?></a>
          </h4>
          <div><?php echo press_content(190); ?></div>
          <div class="gbd-video-wrapper">
          <?php if( get_post_meta($post->ID, 'you-tube-url', true) != ""){ ?>
           <div class="entry-meta col-md-1 fadeIn"> <iframe  src="<?php echo get_post_meta($post->ID, 'you-tube-url', true); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

           <?php } ?>
         </div>
           <div class="clearfix"></div>
          <a href="<?php echo get_post_meta($post->ID, 'read_more', true); ?>"
            target="_blank"> READ MORE <i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
        </div>

<?php endwhile; ?>
        <div class="gbd-pagination">

<?php 
$total_pages = $data->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« Prev'),
            'next_text'    => __('Next »'),

        )
    );
    }    

  }

    wp_reset_postdata();
?> </div>

      </div>
    </main>
  </div>
</div>

<?php
get_footer();