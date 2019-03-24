<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="entry-header">

        <div class="post-type">
            <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
            <span><?php echo get_post_format( $post->ID ); ?></span>
        </div>

        <?php the_title( '<h1>', '</h1>'); ?>

        <div class="byline">
            <?php esc_html_e( 'Author:'); ?> <?php the_author_posts_link(); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <div class="comments-container">
        <?php if ( comments_open() ) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>
    </div>


</article>