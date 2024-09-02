<section class="magazins__hero showUp">
    <h2 class="visually_hidden" aria-level="2" role="heading">Description</h2>
    <article>
        <div class="magazins__hero__content">
            <h3 aria-level="3" role="heading"><?= get_field('magazin_title'); ?></h3>
            <p class="top"><?= get_field('magazin_top_content'); ?></p>
            <p class="bottom"><?= get_field('magazin_bottom_content'); ?></p>
            <?php $image = get_field('magazin_image');
            if ($image): ?>
        </div>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="magazins__hero__img">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </article>
</section>
