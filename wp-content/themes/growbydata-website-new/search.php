<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package growbydata_site
 */
get_header(); 

?>
<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
           <div class="row">
            <div class="col-sm-12">


                <?php
                if (have_posts()) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'growbydata-site'), '<span>' . get_search_query() . '</span>'); ?></h1>
                    </header>
                    <div class="search-results-header">
                        <p class="results-eyebrow results-eyebrow-template">Showing 1-8 of 30
                        <div class="filters">
                            <span aria-hidden="true">Sort by:</span>
                            <ul class="block-list">
                                <li><a class="sort" data-value="default">Most Relevant</a></li><li><a href="#" class="sort" data-value="date">Date</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('components/post/content', 'search');

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part('components/post/content', 'none');

                endif; ?>
            </div>
        </div>

    </main>
</div>
<?php //get_sidebar(); ?>
</div>

<?php
get_footer();
