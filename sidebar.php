<?php if ( ! is_active_sidebar( 'main-sidebar' ) ) {
    return;
} ?>

<aside id="secondary" class="widget-area" role="complementary">
    <p>place widgets here</p>
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
</aside>