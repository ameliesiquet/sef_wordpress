<section class="history">
    <h2 class="actual_project__title"><?= get_field('histoire_title'); ?></h2>
    <p><?= get_field('histoire_content'); ?></p>
    <?php $image = get_field('histoire_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="history__img">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</section>
