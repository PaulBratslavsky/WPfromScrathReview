
            </div> <!-- Closing content div -->
            <footer class="site-footer">
                <p>this is the footer</p>
                <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
                    <aside id="footer-widgets" class="widget-area" role="complementary">
                        <p>place widgets here</p>
                        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                    </aside>
                <?php endif; ?>


                <nav class="main-navigation">
                    <?php

                    $args = [
                        'theme_location' => 'footer-menu',
                    ];

                    wp_nav_menu( $args );

                    ?>
                </nav>
            </footer>
        </div> <!-- Closing page div -->

    <?php wp_footer(); ?>
</body>
</html>
