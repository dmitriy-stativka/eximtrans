<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eximtrans
 */

?>
<?php
	wp_reset_query();
?>
	<footer class="footer">
		<div class="flex_container">
			<div class="flex_row flex_row-align-center">
				<div class="flex_col-tab--1-2 wow fadeInUp" data-wow-duration="1.5s">
					<h3 class="footer-title wow fadeInUp" data-wow-duration="1.5s"><?php the_field( 'title_contacts' );?></h3>

					<div class="footer-form wow fadeInUp" data-wow-duration="1.5s">
						<?php
							if(pll_current_language() == 'ru'){
								echo do_shortcode('[cf7form cf7key="form-rus"]');
							}elseif(pll_current_language() == 'en'){
								echo do_shortcode('[cf7form cf7key="form-eng"]');
							}
						?>
					</div>

				</div>
				<div class="flex_col-tab--1-2 wow fadeInUp" data-wow-duration="1.5s">
					<div class="footer-info">
						<address class="footer-info-address"><?php the_field( 'address');?></address>

						<div class="footer-info-tel">
						
							<?php while ( have_rows('phone') ) : the_row(); ?>
								<a href="tel:<?php the_sub_field('sub_phone') ?>"><?php the_sub_field('sub_phone') ?></a>
							<?php endwhile; ?>
						</div>

						<a class="footer-info-mail" href="mailto:<?php the_field( 'mail_general' );?>"><?php the_field( 'mail_general' );?></a>

						<span class="footer-span">© 2020. All rights reserved.</span>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="call-back">
		<a class="popup__toggle">
			<img src="/wp-content/themes/eximtrans/images/call_back.svg" alt="">
		</a>
	</div>

	<div class="popup__overlay">
        <span class="popup__close"><span></span></span>
	    <div class="popup">
	        <div class="popup_text_top">
				<div class="title-h2">
					<?php pll_e('request'); ?>
				</div>       
			</div>
            <div class="popup-inner" id="wr_result_write_us">
				<?php
					if(pll_current_language() == 'ru'){
						echo do_shortcode('[cf7form cf7key="form-rus"]');
					}elseif(pll_current_language() == 'en'){
						echo do_shortcode('[cf7form cf7key="form-eng"]');
					}
				?>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>


<script>
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if(height > 10){
			$('header').addClass('header-fixed');
		} else{
			$('header').removeClass('header-fixed');
		}
	});

	$('input[type="tel"]').mask('00 (000) 000-00-00');

	new WOW().init();


	var p = $('.popup__overlay')
    $('.popup__toggle').click(function() {
        p.addClass('popup_open')
    })
    p.click(function(event) {
        e = event || window.event
        if (e.target == this) {
            $(p).removeClass('popup_open');
        }
    })
    $('.popup__close').click(function() {
        p.removeClass('popup_open')
    })
    $(function() {
        $('.popup__toggle').bind('click', function(e) {
            e.preventDefault();
        });
    });


	$('.toggle-category').on('click', function(){
		$('.toggle-category').toggleClass('open-category');
		$('.category-list').toggleClass('show');
	})
</script>



</body>
</html>
