<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                    <header class="entry-header">

                        <?php the_title( '<h1>', '</h1>'); ?>

                    </header>

                    <div class="entry-content">

                        <pre><?php var_export( $post ); ?></pre>
                        <a href="<?php echo $post->guid; ?>">Download</a>
                        <?php the_content(); ?>
                    </div>

                    <div class="comments-container">
                        <?php if ( comments_open() ) : ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </div>


                </article>


            <?php endwhile; else : ?>
                <?php get_template_part( '/template-parts/content', 'none'); ?>
            <?php endif; ?>
        </main>
    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>