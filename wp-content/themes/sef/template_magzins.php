<?php /* Template Name: Magazins*/ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="magazins">
        <h1 aria-level="1" role="heading">Découvrez nos magazins</h1>
        <?php get_template_part('magazins/hero'); ?>
        <?php get_template_part('magazins/magazin'); ?>
        <?php get_template_part('magazins/depot_meubles'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

