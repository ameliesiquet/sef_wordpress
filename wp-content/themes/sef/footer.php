<footer class="footer" id="footer" role="contentinfo" tabindex="0">
    <h2 class="visually_hidden" role="heading" aria-level="2">Footer</h2>
    <div class="footer__container">
        <div class="contact">
            <h3 role="heading" aria-level="3">Newsletter</h3>
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
        <div class="footer__container__social">
            <h3 role="heading" aria-level="3">Social Media</h3>
            <a href="" title="Visiter le facebook de l'asbl SEF Huy">
                <img src="../sef/ressources/img/facebook.svg" alt="Le logo de facebook">
            </a>
        </div>
        <div class="footer__container__adresse">
            <p>Rue du Marché 33</p>
            <span>4500 Huy</span>
        </div>
        <div class="footer__container__navigation">
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
                        <li >
                            <a href="<?= esc_url($link); ?>" title="<?= esc_attr($title); ?>" class="<?=dw_is_active($link);?>">
                                <?= esc_html($title); ?>
                            </a>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </div>
    <hr>
    <!-- footer logo kann nichy geladen werden -->
    <img src="./ressources/img/footer_logo.png" alt="">

    <div data-animation="showUp" class="footer__bottom">
        <p>© 2024 Sef Huy - Tous droits réservés</p>
        <span>Crée par Amélie Siquet</span>
        <a href="http://portfolio_wordpress.test/privacy-policy/" title="Go to the privacy policy page">Conditions générales</a>
    </div>
</footer>
<script src="/wp-content/themes/portfolio/ressources/js/site.js"></script>
</body>
</html>
