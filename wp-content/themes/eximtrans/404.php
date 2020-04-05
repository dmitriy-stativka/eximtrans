<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eximtrans
 */
	get_header();
?>

	<div class="error-page">
		
		<div class="flex_container">

			<div class="error-text">
				<h2>404</h2>
				<p><?php pll_e('errorText'); ?></p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php pll_e('errorButton'); ?></a>
			</div>
		</div>
	</div>
	<style>
		header,
		footer{
			display: none!important;
		}

		#page{
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

	</style>
<?php get_footer();