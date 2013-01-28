<?php get_header(); ?>

    <section class="hero">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("hero") ) : endif ?>
    </section><!-- .hero -->

    <section class="main">

        <?php the_post(); ?>


        <?php the_content(); ?>

    </section><!-- .main -->

<?php get_footer(); ?>
