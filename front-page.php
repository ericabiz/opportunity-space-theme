<?php get_header(); ?>

<div class="wrap">

    <section class="hero">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("hero") ) : endif ?>
        <div class="clearboth"></div>
    </section><!-- .hero -->

    <section class="content-area" role="main">

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("slider") ) : endif ?>

        <hr />

        <section class="features">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("features") ) : endif ?>
        </section><!-- .features -->

        <?php the_post(); ?>
        <?php the_content(); ?>

        <hr />
    </section><!-- .content-area -->

<?php get_footer(); ?>
