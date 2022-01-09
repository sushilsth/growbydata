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
    <?php get_template_part('components/footer/cai', 'main'); ?>

</footer>

</div>
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/main.js?v=1' ; ?>"></script>


<?php
require get_template_directory().'/getCountry.php';
$country = new getCountry();
$country = $country->init();
if(strtolower($country) != "nepal") {
?>
<!-- Start of HubSpot Embed Code -->
<!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6177868.js"></script> -->
<!-- End of HubSpot Embed Code -->
<?php } ?>
</body>
</html>
