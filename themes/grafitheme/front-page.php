<?php get_header(); ?>

<?php while(have_posts()): ?>
    <?php the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <a href="<?php get_post_type_archive_link('post'); ?>">Voir les dernières actualités</a>
<?php endwhile; ?>

<?php get_footer(); ?>