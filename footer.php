<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package starter_deliciae
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="colophon" itemtype="http://schema.org/WPFooter" itemscope="itemscope" role="contentinfo">
	<div class="container">
		<div id="copyright text-center">
			<?php echo deliciae_copyright(); ?> <?php bloginfo('name'); ?> / Designed with <i class="fa fa-heart color-accent"></i> and passion by <a href="http://deliciae.org" title="Deliciae.org" target=_blank>Deliciae.org</a>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>