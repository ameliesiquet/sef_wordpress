<?php get_header() ?>
<main class="home">
    <h1 class="visually_hidden">Home</h1>
    <section class="hero showUp">
        <h2>Nouveau départ <span>Ensemble</span>, plus forts</h2>
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
    <section class="actual_project">
        <h2 class="actual_project__title"><?= get_field('projet_actuel_titre'); ?></h2>
        <div class="actual_project__item">
            <h3><?= get_field('projet_actuel_second_titre'); ?></h3>
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
    <section class="temoignages">
        <h2 class="temoignages__title">Témoignages</h2>
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
                    $content = get_field('temoinage_content');
                    ?>
                    <div class="temoignages__container__card">
                        <h3 aria-level="3" role="heading" itemprop="name"><?= esc_html($desc); ?></h3>
                        <?php if ($image_url): ?>
                            <img src="<?= esc_url($image_url); ?>" alt="" width="30%">
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
</main>
<?php get_footer() ?>
