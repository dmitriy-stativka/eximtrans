<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eximtrans
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eximtrans' ); ?></a>

	<header id="masthead" class="header">
	
		<div class="flex_container">
			
			<?php the_custom_logo();?>
		

			<ul class="category-list">
				<li class="category-item">
					<a onclick="$('html, body').animate({scrollTop:$('.top-link').offset().top}, '2000', 'swing');" class="category-link">About</a>
				</li>
				<li class="category-item">
					<a onclick="$('html, body').animate({scrollTop:$('.title-block-h2').offset().top}, '2000', 'swing');" class="category-link">Our Services</a>
				</li>
				<li class="category-item">
					<a onclick="$('html, body').animate({scrollTop:$('footer').offset().top}, '2000', 'swing');" class="category-link">Contacts</a>
				</li>
			</ul>

			<ul class="lang-list">
				<?php pll_the_languages();?>
			</ul>

			<ul class="tel-info">
				<li class="tel-
				item"><a href="tel:+38(093) 743 51 05" class="tel-link">+38(093) 743 51 05</a></li>
				<li class="tel-item"><a href="tel:+38(057) 714 26 47" class="tel-link">+38(057) 714 26 47</a></li>
			</ul>
		</div>
	
	</header>
