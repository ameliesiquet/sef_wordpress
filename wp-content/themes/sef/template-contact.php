<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="contact showUp">
        <h1 role="heading" aria-level="1" class="contact_title main_title">Contactez-nous!</h1>
        <section class="contact__container">
            <?php $image = get_field('contact_image');
            if ($image): ?>
                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
            <?php else: ?>
                <p>Image not found</p>
            <?php endif; ?>
            <p><?= get_field('contact_content'); ?></p>
        </section>
        <?php get_template_part('components/contact-form'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>