<article class="donate__article volontariat showUp">
    <h2 role="heading" aria-level="2"><?= get_field('volontariat_title'); ?></h2>
    <div class="volontariat__content">
        <div class="wrapper">
            <span><?= get_field('volontariat_top_content'); ?></span>
            <p><?= get_field('volontariat_content'); ?></p>
            <?php
            $contact_page_id = 225;
            ?>
            <div class="cta">
                <a class="cta__btn" href="<?= get_permalink($contact_page_id); ?>"><?= get_field('volontariat_link'); ?></a>
            </div>
        </div>
        <?php $image = get_field('volontariat_image');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </div>
</article>


