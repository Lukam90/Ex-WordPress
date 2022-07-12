<?php get_header(); ?>

<form class="form-inline">
    <input type="search" class="form-control mb-2 mr-sm-2" name="search" id="search" value="<?= get_search_query(); ?>" placeholder="Votre recherche" />

    <div class="form-check mb-2 mr-sm-2">
        <input class="form-check-input" type="checkbox" value="1" name="sponso" id="sponso" <?= checked("1", get_query_var("sponso")); ?>>

        <label class="form-check-label" for="sponso">Article sponsorisé seulement</label>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
</form>

<h1 class="mb-4">Résultat pour votre recherche "<?= get_search_query(); ?>"</h1>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while(have_posts()): ?>
            <?php the_post(); ?>

            <div class="col-sm-4">
                <?php get_template_part("parts/card", "post"); ?>
            </div>
        <?php endwhile; ?>
    </div>

    <?php grafitheme_pagination(); ?>
<?php else: ?>
    <h1>Pas d'articles.</h1>
<?php endif; ?>

<?php get_footer(); ?>