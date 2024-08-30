<section class="hero showUp">
    <h2 aria-level="2" role="heading">Nouveau départ <span>Ensemble</span>, plus forts</h2>
    <p><?= get_field('home_hero_content'); ?></p>
    <div class="hero__cta">
        <a class="cta__btn" href="<?= get_post_type_archive_link('contact'); ?>"
           title="Lien vers nos projets">J'ai besoin de vous</a>
    </div>
    <?php $image = get_field('home_hero_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="hero__img">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</section>
