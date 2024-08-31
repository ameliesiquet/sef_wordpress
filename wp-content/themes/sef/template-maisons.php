<?php /* Template Name: Maisons*/ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="maisons">
        <h1 aria-level="1" role="heading">Découvrez nos maisons</h1>
        <?php get_template_part('pages/maisons/hero') ?>
        <?php get_template_part('pages/maisons/maison') ?>
        <?php get_template_part('pages/maisons/post_hebergement') ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

