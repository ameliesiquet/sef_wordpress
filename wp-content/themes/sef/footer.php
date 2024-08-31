<footer class="footer" id="footer" role="contentinfo" tabindex="0">
    <h2 class="visually_hidden" role="heading" aria-level="2">Footer</h2>
    <?php
    $logo = get_post(287);
    if ($logo):
        ?>
        <div class="footer__container">
            <div class="footer__container__item contact">
                <h3 role="heading" aria-level="3">Contact</h3>
                <ul role="list" class="footer__container__contact__list">
                    <li>
                        <a title="Envoyer un email à l'asbl"
                           href="mailto:contact@sefasbl.com">email: contact@sefasbl.com</a>
                    </li>
                    <li>
                        <a title="Téléphoner à l'asbl" href="tel:085/21 57 52">tel: 085/21 57 52</a>
                    </li>
                </ul>
            </div>
            <div class=" footer__container__item social">
                <h3 role="heading" aria-level="3">Social Media</h3>
                <?php $image = get_field('facebook_logo', $logo->ID); ?>
                <?php if ($image): ?>
                    <a href="" title="Visiter le facebook de l'asbl SEF Huy">
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                    </a>
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>

            </div>
            <div class=" footer__container__item adresse">
                <h3 role="heading" aria-level="3">Adresse</h3>
                <p>Rue du Marché 33</p>
                <span>4500 Huy</span>
            </div>
            <div class=" footer__container__item navigation">
                <h3 role="heading" aria-level="3">Navigation</h3>
                <ul class="footer__container__navigation__list">
                    <?php
                    $nav = new WP_Query([
                        'post_type' => 'navigation-list',
                        'posts_per_page' => 6,
                    ]);
                    if ($nav->have_posts()) :
                        while ($nav->have_posts()) : $nav->the_post();
                            $title = get_field('title');
                            $link = get_field('link');
                            ?>
                            <li>
                                <a href="<?= esc_url($link); ?>" title="<?= esc_attr($title); ?>"
                                   class="<?= dw_is_active($link); ?>">
                                    <?= esc_html($title); ?>
                                </a>
                            </li>
                        <?php endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
        <hr>

        <?php $image = get_field('footer_logo', $logo->ID); ?>
        <?php if ($image): ?>
        <img class="footer-logo" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
    <?php else: ?>
        <p>Image not found</p>
    <?php endif; ?>

        <div data-animation="showUp" class="footer__bottom">
            <p>© 2024 Sef Huy - Tous droits réservés</p>
            <span>Crée par Amélie Siquet</span>
            <a href="http://portfolio_wordpress.test/privacy-policy/" title="Go to the privacy policy page">Conditions
                générales</a>
        </div>
    <?php else: echo "Logos not found" ?>
    <?php endif; ?>
</footer>
<script src="/wp-content/themes/sef/ressources/js/site.js"></script>
</body>
</html>
