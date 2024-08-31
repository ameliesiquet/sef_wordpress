<?php /* Template Name: Sur nous */ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="sur-nous">
        <h1 aria-level="1" role="heading">Le SEF, un projet</h1>
        <?php get_template_part('pages/sur-nous/family'); ?>
        <?php get_template_part('pages/sur-nous/history'); ?>
        <?php get_template_part('pages/sur-nous/team'); ?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer() ?>
