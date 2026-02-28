<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Outfit_Creation
 */

?>

    <footer id="colophon" class="site-footer">
        <div class="footer-inner">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> Outfit Creation. All rights reserved. <br/> Based in Nepal.
            </div><!-- .site-info -->
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
