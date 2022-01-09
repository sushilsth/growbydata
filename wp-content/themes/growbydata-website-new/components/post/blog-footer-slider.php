<div class="gbd-blog-bot-slider">
    <div class="container">
        <div class="slider-blog-post">
            <?php
                $category_detail = get_categories(); //$post->ID
                foreach ($category_detail as $cat) {
                    $val = get_field('blog_category_slider_content', 'category_' . $cat->term_id);
                    if($val != "" && $val!= NULL){
            ?>
                        <div>
                            <?php echo get_field('blog_category_slider_content', 'category_' . $cat->term_id); ?>
                        </div>
                        <?php
                    }    
                }
            ?>
        </div>
    </div>
</div><!-- .gbd-blog-bot-slider -->