<section class="magazins__depot">
    <h2 aria-level="2" role="heading">Le dépot meubles</h2>
    <div class="house-magazine">
        <h3 aria-level="3" role="heading"><?php echo get_field('depot_title'); ?></h3>
        <?php $image = get_field('depot_image');
        if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="maisons__hero__img">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
        <div class="adress">
            <p><?php echo get_field('depot_adress_title'); ?></p>
            <span><?php echo get_field('depot_adress_street'); ?></span>
            <span><?php echo get_field('depot_adress_postalcode'); ?></span>
        </div>
        <p><?php echo get_field('depot_ouvertures_title'); ?>
            <span><?php echo get_field('depot_ouvertures_content'); ?></span>
        </p>
        <p><?php echo get_field('depot_content'); ?></p>
    </div>
</section>
