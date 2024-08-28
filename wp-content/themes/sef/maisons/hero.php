<?php if (have_posts()): while (have_posts()): the_post(); ?>
<section class="maisons__hero">
    <h2 class="visually_hidden">Description</h2>
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
        <h3>Qui&nbsp;?</h3>
        <p>Nous accueillons des personnes en difficulté, sans-abri, en rupture de tout ou presque et les enfants qui les accompagnent.</p>
    </article>
    <article>
        <h3>Quand&nbsp;</h3>
        <p>Nous avons de la place pour quelques jours, quelques semaines ou quelques mois.</p>
    </article>
</section>
<?php endwhile; endif; ?>
