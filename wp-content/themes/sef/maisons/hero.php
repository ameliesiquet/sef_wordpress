<section class="maisons__hero">
    <h2 class="visually_hidden" aria-level="2" role="heading">Description</h2>
    <div class="maison__hero__content">
        <p><?= get_field('hero_content_top'); ?></p>
        <ul>
            <li>
                <a href=""><?= get_field('hero_link_2'); ?></a>
            </li>
            <li>
                <a href=""><?= get_field('hero_link_2'); ?></a>
            </li>
        </ul>
        <p><?= get_field('hero_content_bottom'); ?></p>
        <?php $image = get_field('hero_img');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="maisons__hero__img">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </div>
    <article>
        <h3 aria-level="3" role="heading"><?= get_field('article_qui_title'); ?></h3>
        <p><?= get_field('article_qui_content'); ?></p>
    </article>
    <article>
        <h3 aria-level="3" role="heading"><?= get_field('article_quand_title'); ?></h3>
        <p><?= get_field('article_quand_content'); ?></p>
    </article>
</section>
