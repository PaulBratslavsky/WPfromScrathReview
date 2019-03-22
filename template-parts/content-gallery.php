<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>'); ?>
    </header>

    <div class="entry-content">
        <h1>This is Gallery Content Template</h1>
        <h2>This is page content</h2>
        <?php the_content(); ?>
    </div>
</article>