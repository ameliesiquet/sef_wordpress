<?php /* Template Name: Maisons*/ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="maisons">
        <h1 aria-level="1" role="heading">Découvrez nos maisons</h1>
        <?php get_template_part('maisons/hero') ?>
        <?php get_template_part('maisons/maison') ?>
        <?php get_template_part('maisons/post_hebergement') ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

