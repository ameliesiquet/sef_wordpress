<section class="temoignages">
    <h2 class="temoignages__title" aria-level="2" role="heading">Témoignages</h2>
    <div class="temoignages__container">
        <?php
        $temoignages = new WP_Query([
            'post_type' => 'temoignages',
            'posts_per_page' => 4,
        ]);

        if ($temoignages->have_posts()) :
            while ($temoignages->have_posts()) : $temoignages->the_post();
                $desc = get_field('temoinage_desc');
                $image = get_field('temoinage_image');
                $image_url = $image['url'] ?? '';
                $image_alt = $image['alt'] ?? '';
                $content = get_field('temoinage_content');
                ?>
                <div class="temoignages__container__card">
                    <h3 aria-level="3" role="heading"><?= esc_html($desc); ?></h3>
                    <?php if ($image_url): ?>
                        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_url($image_alt); ?>" width="30%">
                    <?php else: ?>
                        <img src="path/to/default/image.png" alt="Default image" width="30%">
                    <?php endif; ?>
                    <p><?= esc_html($content); ?></p>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Pas trouvé de témoignages</p>';
        endif;
        ?>
    </div>
</section>
