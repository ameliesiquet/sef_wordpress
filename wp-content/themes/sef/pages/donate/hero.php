<section class="donate__hero showUp">
    <figure>
        <?php $image = get_field('donate_image');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
            <figcaption><?= get_field('donate_figcaption'); ?></figcaption>
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </figure>
    <div>
        <p><?= get_field('donate_content'); ?></p>
        <span>Vous pouvez nous soutenir par un <a href="">versement</a>, une <a href="">versement</a>, des <a href="">versement</a> ou une <a href="">versement</a></span>
    </div>
</section>
