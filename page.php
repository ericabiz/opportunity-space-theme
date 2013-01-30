<?php get_header(); ?>

<div class="wrap">
    <section class="content-area" role="main">

        <?php the_post(); ?>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <hr />
    </section><!-- .content-area -->

<?php get_footer(); ?>
