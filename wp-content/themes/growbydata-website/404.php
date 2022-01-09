<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package growbydata_site
 */

get_header(); ?>
    <section class="error-404 not-found">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'growbydata-site'); ?></h1>
                    </header>
                    <div class="page-content">
                        <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'growbydata-site'); ?></p>

                        <?php
                        get_search_form();

                        the_widget('WP_Widget_Recent_Posts');

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
