<?php

/**
 * Template Name: Page avec bannière
 * Template Post Type: page, post
 */

?>

<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <p>Ici la bannière.</p>

        <h1><?php the_title(); ?></h1>

        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: auto;">
        </p>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>