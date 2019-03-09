<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>WP From Scratch</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <div id="page">
        <a href="#content" class="skip-link screen-reader-text">
            <?php esc_html_e( 'Skip to content', 'wpfromscratchwptheme' ); ?>
        </a>


        <header id="masthead" class="site-header" role="banner" >

            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) )?>" rel="home">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
                <p class="site-description"><?php bloginfo( 'description'); ?></p>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php

                $args = [
                    'theme_location' => 'main-menu',
                ];

                wp_nav_menu( $args );

                ?>
            </nav>

        </header>

        <div id="content" class="site-content">
