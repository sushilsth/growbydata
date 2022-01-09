<?php
$args = array(
        'p'         => $_POST['postid'],
        'post_type' => 'post',
        );
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
?>
<!DOCTYPE html>
             <div class="gbd-blog-article-v3">
                    <div class="gbd-blog-article-block">
                        <div class="gbd-blog-article">
                            <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <div class="gbd-blog-article-titles">
                                    <div class="container">
                                        <h1><?php the_title(); ?></h1>
                                    </div>
                                </div><!-- gbd-blog-article-titles -->


    <div class="container">
     <div class="gbd-blog-container">

      <div class="gbd-featured-article-image">
        <?php if ( '' != get_the_post_thumbnail() ) : ?>
         <div class="gbd-post-thumbnail feature-img-holder">
          <!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> -->
           <?php the_post_thumbnail('growbydata-site-featured-image'); ?>
           <!-- </a> -->
       </div>
    <?php endif; ?>
    </div>          

    <div class="gbd-abstract-load">

        <?php if ( has_excerpt() ) { the_excerpt(); } else { echo ''; } ?>

    </div>
    <div class="entry-content">
        <?php
        the_content(); 
        ?> 
    </div>

                     </div>

                 </div>

    </article><!-- #post-## -->

    </div><!-- gbd-blog-article -->

    </div><!-- gbd-blog-article-block -->

    </div><!-- gbd-blog-article-v3 -->
<?php
}}
?>