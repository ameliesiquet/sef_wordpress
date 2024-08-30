<section class="magazins__hero">
    <h2 class="visually_hidden" aria-level="2" role="heading">Description</h2>
    <article>
        <h3 aria-level="3" role="heading"><?= get_field('magazin_title'); ?></h3>
        <p><?= get_field('magazin_top_content'); ?></p>
        <p><?= get_field('magazin_bottom_content'); ?></p>
        <?php $image = get_field('magazin_image');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="magazins__hero__img">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </article>
</section>
