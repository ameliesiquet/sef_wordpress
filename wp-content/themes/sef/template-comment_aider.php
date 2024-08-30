<?php /* Template Name: Comment aider?*/ ?>
<?php get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="help">
        <h1 aria-level="1" role="heading">Comment nous aider?</h1>
        <?php get_template_part('comment-aider/articles') ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>

