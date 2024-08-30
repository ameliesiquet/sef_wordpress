<article class="donate__article legs">
    <h2 role="heading" aria-level="2"><?= get_field('legs_title'); ?></h2>
    <span><?= get_field('legs_top_content'); ?></span>
    <p><?= get_field('legs_content'); ?></p>
    <?php
    $contact_page_id = 225;
    ?>
    <a href="<?= get_permalink($contact_page_id); ?>"><?= get_field('legs_link'); ?></a>
    <?php $image = get_field('legs_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</article>



