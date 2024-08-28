<section class="maisons__maison1">
    <h2 class="visually_hidden">La Bouqinerie du p'tit Augustin</h2>
    <?php
    $maison_1 = get_post(131);
    if ($maison_1):
        ?>
        <article class="maisons__maison1__article">
            <div class="house-info">
                <h3> <?php echo get_field('maison_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('maison_content', $maison_1->ID); ?></p>
                <img src="<?php echo get_field('maison_img', $maison_1->ID); ?>" alt="Une photo du magazin">
                <div class="adress">
                    <p><?php echo get_field('maison_adress_title', $maison_1->ID); ?></p>
                    <span><?php echo get_field('maison_adress_street', $maison_1->ID); ?></span>
                    <span><?php echo get_field('maison_adress_postalcode', $maison_1->ID); ?></span>
                </div>
            </div>
            <div class="house-magazine">
                <h3><?php echo get_field('magazin_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('magazin_second_title', $maison_1->ID); ?>
                    <span><?php echo get_field('magazin_content', $maison_1->ID); ?></span>
                </p>
                <img src="<?php echo get_field('magazin_image', $maison_1->ID); ?>" alt="Une photo du magazin">
            </div>
        </article>
    <?php endif; ?>
</section>

<section class="maisons__maison2">
    <h2 class="visually_hidden">Les Maisons</h2>
    <?php
    $maison_2 = get_post(135);

    if ($maison_2): ?>
        <article class="maisons__maison__article">
            <div class="house-info">
                <h3> <?php echo get_field('maison_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('maison_content', $maison_1->ID); ?></p>
                <img src="<?php echo get_field('maison_img', $maison_1->ID); ?>" alt="Une photo du magazin">
                <div class="adress">
                    <p><?php echo get_field('maison_adress_title', $maison_1->ID); ?></p>
                    <span><?php echo get_field('maison_adress_street', $maison_1->ID); ?></span>
                    <span><?php echo get_field('maison_adress_postalcode', $maison_1->ID); ?></span>
                </div>
            </div>
            <div class="house-magazine">
                <h3><?php echo get_field('magazin_title', $maison_1->ID); ?></h3>
                <p><?php echo get_field('magazin_second_title', $maison_1->ID); ?>
                    <span><?php echo get_field('magazin_content', $maison_1->ID); ?></span>
                </p>
                <img src="<?php echo get_field('magazin_image', $maison_1->ID); ?>" alt="Une photo du magazin">
            </div>
        </article>
    <?php endif; ?>
</section>
