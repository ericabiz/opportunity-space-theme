<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

    <!-- Page Title -->
    <title><?php the_title_attribute(); ?></title>

    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=IE8" />
    <meta name="viewport" content="width=960, maximum-scale=1.0" />
    <link rel="author" href="https://plus.google.com/108643698184666422897" />

    <!-- Stylesheet Links -->
    <link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo bloginfo('template_url') . '/css/opportunity-space-style.css' ?>" />

    <!-- Script Tags -->
    <script type="text/javascript" src="//use.typekit.net/eth8fjq.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.png" />

    <!-- wp_head(); output -->
    <?php wp_head(); ?>

</head>
<body <?php body_class($class); ?>

    <header class="site-header" role="banner">
        <div class="wrapper">

            <hgroup>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </hgroup>

            <nav class="primary-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary-nav' ) ); ?>
            </nav><!-- .primary-nav -->

        </div><!-- .wrapper -->
    </header><!-- .site-header -->
