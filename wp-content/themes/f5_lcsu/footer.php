<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<div class="row">
			<div class="small-12 columns">
				<p class="small-text-center medium-text-right postscript">COPYRIGHT &copy; <?php echo date('Y'); ?> LSCU & CUNA. ALL RIGHTS RESERVED</p>
			</div>
		</div>	
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php include('smg-scripts.php'); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <script>window.addEventListener('LPLeadboxesReady',function(){LPLeadboxes.setExitIntent('141f6b773f72a2:12d5460aab46dc',{dontShowFor:'7d'});});</script> 
<script>
	var mobileMenuLinks = document.querySelectorAll('.off-canvas-list li');
	for ( var i = 0; i < mobileMenuLinks.length; i++) {
		mobileMenuLinks[i].addEventListener("click", closeMenu, false );
	}

	function closeMenu() {
		document.querySelector('.off-canvas-wrap').classList.remove('move-right');
	}
</script>
</body>
</html>
