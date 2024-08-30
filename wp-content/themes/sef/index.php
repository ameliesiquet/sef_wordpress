<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main class="home">
    <h1 class="visually_hidden">Home</h1>
    <?php get_template_part('home/hero') ?>
    <?php get_template_part('components/projet_actuel') ?>
    <?php get_template_part('home/temoinages') ?>
</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>
