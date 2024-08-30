<article class="donate__article nature">
    <h2 role="heading" aria-level="2"><?= get_field('nature_title'); ?></h2>
    <p><?= get_field('nature_top_content'); ?></p>
    <div class="que">
        <span><?= get_field('nature_que_title'); ?></span>
        <p><?= get_field('nature_que_content'); ?></p>
    </div>
    <div class="ou">
        <span><?= get_field('nature_ou_title'); ?></span>
        <p><?= get_field('nature_ou_conntent'); ?></p>
    </div>
    <p><?= get_field('nature_bottom content'); ?></p>
    <?php $image = get_field('nature_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</article>

