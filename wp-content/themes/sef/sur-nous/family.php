    <section class="family showUp">
    <h2><?= get_field('famille_title'); ?></h2>
    <p><?= get_field('famille_content'); ?></p>
    <?php $image = get_field('famille_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="family__img">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</section>
