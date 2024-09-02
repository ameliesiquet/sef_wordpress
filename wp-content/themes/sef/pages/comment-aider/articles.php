<section class="help__ways showUp">
    <?php
    $articles = new WP_Query([
        'post_type' => 'articles',
        'posts_per_page' => 4,
    ]);

    if ($articles->have_posts()) :
        while ($articles->have_posts()) : $articles->the_post();
            $title = get_field('article_title');
            $content = get_field('article_content');
            $image = get_field('article_image');
            $image_url = $image['url'] ?? '';
            $image_alt = $image['alt'] ?? '';
            ?>
            <article class="help__ways__article">
                <h2 aria-level="2" role="heading"><?= esc_html($title); ?></h2>
                <div class="help__ways__article__content">
                    <?php if ($image_url): ?>
                        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_url($image_alt); ?>">
                    <?php else: ?>
                        <img src="path/to/default/image.png" alt="Default image" width="30%">
                    <?php endif; ?>
                    <p><?= esc_html($content); ?></p>
                </div>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Pas trouvé des articles</p>';
    endif;
    ?>

</section>
