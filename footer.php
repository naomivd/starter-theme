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
	<div id="copyright">
		&copy; <?php echo date('Y'); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="themeDesignerURI" target="_blank" rel="nofollow">themeDesigner</a> &amp; 
		<a href="themeAuthorURI" target="_blank" rel="nofollow">themeAuthor</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>