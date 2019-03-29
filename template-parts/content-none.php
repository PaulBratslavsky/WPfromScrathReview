<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="entry-header">
        <h1><?php esc_html_e( '404', 'wpfromscratchwptheme') ?></h1>
    </header>

    <div class="entry-content">
        <p><?php esc_html_e( 'The content you are looking for has left the building.', 'wpfromscratchwptheme') ?></p>

        <p><?php echo get_search_form(); ?></p>
    </div>

</article>