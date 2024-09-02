<section class="projets__all showUp">
    <?php
    $years = get_post(200);
    if ($years):
    ?>
    <div class="years">
        <ul>
            <li><?php echo get_field('year_1', $years->ID); ?></li>
            <li><?php echo get_field('year_2', $years->ID); ?></li>
            <li><?php echo get_field('year_3', $years->ID); ?></li>
        </ul>
    </div>
    <span class="projets__all__fleche">
        <?php $year_image = get_field('arrow', $years->ID); ?>
        <?php if ($year_image): ?>
            <img src="<?= esc_url($year_image['url']); ?>" alt="<?= esc_attr($year_image['alt']); ?>">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
    </span>
    <?php else: echo"Years not found" ?>
    <?php endif; ?>
    <?php
    $projet_1 = get_post(185);
    if ($projet_1):
    ?>
    <article class="projets__all__projet">
        <h3 aria-level="3" role="heading"><?php echo get_field('projet_title', $projet_1->ID); ?></h3>
        <span><?php echo get_field('projet_new', $projet_1->ID); ?></span>
        <p><?php echo get_field('projet_top_content', $projet_1->ID); ?></p>
        <div class="image-slider">
            <ul>
                <li>
                    <?php $image1 = get_field('projet_image_1', $projet_1->ID); ?>
                    <?php if ($image1): ?>
                        <img src="<?= esc_url($image1['url']); ?>" alt="<?= esc_attr($image1['alt']); ?>">
                    <?php else: ?>
                        <p>Image not found</p>
                    <?php endif; ?>
                </li>
                <li>
                    <?php $image2 = get_field('projet_image_2', $projet_1->ID); ?>
                    <?php if ($image2): ?>
                        <img src="<?= esc_url($image2['url']); ?>" alt="<?= esc_attr($image2['alt']); ?>">
                    <?php else: ?>
                        <p>Image not found</p>
                    <?php endif; ?>
                </li>
                <li>
                    <?php $image3 = get_field('projet_image_3', $projet_1->ID); ?>
                    <?php if ($image3): ?>
                        <img src="<?= esc_url($image3['url']); ?>" alt="<?= esc_attr($image3['alt']); ?>">
                    <?php else: ?>
                        <p>Image not found</p>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <img src="" alt="">
        <p> <?php echo get_field('projet_bottom_content', $projet_1->ID); ?></p>
    </article>
    <?php else: echo"Projet not found" ?>
    <?php endif; ?>
    <?php
    $projet_2 = get_post(193);
    if ($projet_2):
        ?>
        <article class="projets__all__projet">
            <h3 aria-level="3" role="heading"><?php echo get_field('projet_title', $projet_2->ID); ?></h3>
            <span><?php echo get_field('projet_new', $projet_2->ID); ?></span>
            <p><?php echo get_field('projet_top_content', $projet_2->ID); ?></p>
            <div class="image-slider">
                <ul>
                    <li>
                        <?php $image1 = get_field('projet_image_1', $projet_2->ID); ?>
                        <?php if ($image1): ?>
                            <img src="<?= esc_url($image1['url']); ?>" alt="<?= esc_attr($image1['alt']); ?>">
                        <?php else: ?>
                            <p>Image not found</p>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php $image2 = get_field('projet_image_2', $projet_2->ID); ?>
                        <?php if ($image2): ?>
                            <img src="<?= esc_url($image2['url']); ?>" alt="<?= esc_attr($image2['alt']); ?>">
                        <?php else: ?>
                            <p>Image not found</p>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php $image3 = get_field('projet_image_3', $projet_2->ID); ?>
                        <?php if ($image3): ?>
                            <img src="<?= esc_url($image3['url']); ?>" alt="<?= esc_attr($image3['alt']); ?>">
                        <?php else: ?>
                            <p>Image not found</p>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <img src="" alt="">
            <p> <?php echo get_field('projet_bottom_content', $projet_1->ID); ?></p>
        </article>
    <?php else: echo"Projet not found" ?>
    <?php endif; ?>
</section>
