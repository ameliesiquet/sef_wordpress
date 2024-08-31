<?php /* Template Name: Projets*/ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="projets">
        <h1 aria-level="1" role="heading">Nos projets</h1>
        <?php get_template_part('components/projet_actuel') ?>
        <?php get_template_part('pages/projets/projets') ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

