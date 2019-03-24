<?php if ( ! is_active_sidebar( 'page-sidebar' ) ) {
    return;
} ?>

<aside id="secondary" class="front-page-widget-area" role="complementary">
    <?php dynamic_sidebar( 'front-page' ); ?>
</aside>