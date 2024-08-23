<?php /* Template Name: Sur nous */ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<main class="sur-nous">
    <h1 class="">Le SEF, un projet</h1>
    <?php get_template_part('sur-nous/family.php'); ?>
    <?php get_template_part('sur-nous/history.php'); ?>
    <?php get_template_part('sur-nous/team.php'); ?>
</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>
