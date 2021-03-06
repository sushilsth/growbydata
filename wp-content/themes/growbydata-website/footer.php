<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growbydata_site
 */

?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_template_part('components/footer/footer', 'main'); ?>
    <?php get_template_part('components/footer/trial', 'main'); ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
