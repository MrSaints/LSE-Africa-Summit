<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container off-canvas-wrap">
        <div class="inner-wrap">
            <nav class="tab-bar">
                <section class="left tab-bar-section">
                    <a href="#" title="Home">
                        <img src="assets/img/logo.png" class="menu-logo" alt="LSE Africa Summit">
                    </a>
                </section>

                <section class="right-small">
                    <a class="right-off-canvas-toggle menu-icon"><span></span></a>
                </section>
            </nav>

            <?php get_sidebar() ?>

            <section class="main-section">