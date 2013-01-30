<?php get_header(); ?>

<section class="hero">
    <div class="wrap">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("hero") ) : endif ?>
    </div>
    <div class="clearboth"></div>
</section><!-- .hero -->

<div class="wrap">
    <section class="content-area" role="main">

        <section class="features">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("features") ) : endif ?>
        </section><!-- .features -->

        <?php the_post(); ?>
        <?php the_content(); ?>

        <hr />
    </section><!-- .content-area -->

<?php get_footer(); ?>
