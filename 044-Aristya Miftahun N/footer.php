</div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'yourthemename')); ?>">
                <?php printf(esc_html__('Proudly powered by %s', 'yourthemename'), 'WordPress'); ?>
            </a>
            <span class="sep"> | </span>
            <?php printf(esc_html__('Theme: %1$s by %2$s.', 'yourthemename'), 'yourthemename', '<a href="http://example.com">Your Name</a>'); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
