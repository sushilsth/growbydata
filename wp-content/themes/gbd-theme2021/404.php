<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GBD-Theme2021
 */

get_header();
?>

<style type="text/css">
	section.error-404.not-found {
		margin-bottom: 70px;
		margin-top: 50px;
	}
	section.error-404.not-found .page-header h1 {
		margin-top: 0 !important;
		color: #ffa41f;
		font-size: 33px;
		font-weight: 600;
		text-align: center;
	}
	form.search-form {
		background: #fafafa;
		padding: 20px;
		border: 1px solid #ccc;
		width: 800px;
		margin: 40px auto 0;
	}
	form.search-form label {
		width: 88%;
		display: block;
		float: left;
	}
	form.search-form input.search-field {
		background: #fff;
		width: 100%;
	}
	.not-found .search-submit {
		height: 42px !important;
		width: 12%;
		text-align: center;
		padding: 0;
		border: none;
	}
	@media screen and (max-width: 820px) and (min-width: 320px) { 
		form.search-form {
			width: 100%;
		}
	}
	@media screen and (max-width: 767px) and (min-width: 320px) {
		form.search-form label {
			width: 65%;
		}
		.not-found .search-submit {
			width: 35%;
		}
	}
</style>

<main id="primary" class="site-main container text-center">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gbd-theme2021' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gbd-theme2021' ); ?></p>

			<?php
			get_search_form();
			?>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
