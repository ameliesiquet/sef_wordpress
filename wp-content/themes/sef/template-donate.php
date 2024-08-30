<?php /* Template Name: Donate*/ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="donate showUp">
        <h1 role="heading" aria-level="1" class="contact_title main_title">Souternir notre action</h1>
        <?php get_template_part('donate/hero'); ?>
        <?php get_template_part('donate/financier'); ?>
        <?php get_template_part('donate/nature'); ?>
        <?php get_template_part('donate/volontariat'); ?>
        <?php get_template_part('donate/legs'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>