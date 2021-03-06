<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

</div><!-- Close container -->
<div class="footer-container">
    <footer class="footer">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>

        <section class="footer-meta">
            Copyright <?php echo date( 'Y' ); ?> Kwaske Construction<br/>
            Powered by WordPress, Built by <a href="https://realbigmarketing.com" class="footer-rbm-link" target="_blank">Real Big Marketing</a>
        </section>
    </footer>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
    </div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>