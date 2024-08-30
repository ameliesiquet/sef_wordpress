<section class="actual_project">
    <h2 class="actual_project__title" aria-level="2" role="heading"><?= get_field('projet_actuel_titre'); ?></h2>
    <div class="actual_project__item">
        <h3 aria-level="3" role="heading"><?= get_field('projet_actuel_second_titre'); ?></h3>
        <p><?= get_field('projet_actuel_content'); ?></p>
        <div class="actual_project__cta">
            <a class="cta__btn" href="<?= get_post_type_archive_link('project'); ?>"
               title="Lien vers le projet">savoir plus</a>
        </div>
    </div>
    <?php $image = get_field('projet_actuel_image');
    if ($image): ?>
        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="acutal_project__img">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>
</section>
