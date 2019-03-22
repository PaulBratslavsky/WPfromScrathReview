<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="entry-header">

        <div class="post-type">
            <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
            <span><?php echo get_post_format( $post->ID ); ?></span>
        </div>

        <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>'); ?>

        <div class="posts-image">
            image coming soon
        </div>

        <div class="byline">
            <?php esc_html_e( 'Author:'); ?> <?php the_author(); ?>
        </div>
    </header>

    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
    </div>

</article>