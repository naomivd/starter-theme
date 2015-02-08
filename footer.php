<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>

    </div><!-- #main -->

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
    <div id="copyright">
        <!-- copyright goes here -->
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>
