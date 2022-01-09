<?php
if (!function_exists('growbydata_blog_front_page_featured_category')) :
    /**
     * Front Page Featured Category
     */
    function growbydata_blog_front_page_featured_category() {
        if (1 == growbydata_blog_get_option('enable_featured_category')) { ?>
            <div class="featured-item-wrapper">
                <div class="flex-grid">
                    <?php for ($i=1; $i <= 3; $i++) { ?>
                        <div class="col">
                        <a href="<?php echo esc_url(get_category_link( growbydata_blog_get_option('select_featured_category_'.$i) )); ?>">
                            <div class="featured-item-image" style="background-image: url(<?php echo esc_url(growbydata_blog_get_option('select_featured_category_image_'.$i)); ?>);">
                                <h2 class="featured-item-button">
                                    <?php echo esc_html(get_cat_name(growbydata_blog_get_option('select_featured_category_'.$i)));?>
                                    <div class="short-underline"></div>
                                </h2>
                            </div>
                        </a>
                    </div>
                    <?php  } ?>
                </div>
            </div>
        <?php
        }
    }
    endif;
growbydata_blog_front_page_featured_category();

