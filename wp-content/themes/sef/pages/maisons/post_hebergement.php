<section class="post-hebergement showUp">
    <h2 aria-level="1" role="heading">Post Hébergement</h2>
    <div class="post-hebergement__container">
        <div class="wrapper">
            <p><?= get_field('post_list_title'); ?></p>
            <ul>
                <li><?= get_field('post_list_item_1'); ?></li>
                <li><?= get_field('post_list_item_2'); ?></li>
                <li><?= get_field('post_list_item_3'); ?></li>
            </ul>
        </div>

        <?php $image = get_field('post_image');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="post-hebergement__img">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </div>
</section>
