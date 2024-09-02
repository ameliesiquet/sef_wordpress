<article class="donate__article financier showUp">
    <h2 role="heading" aria-level="2"><?= get_field('financier_title'); ?></h2>
    <div class="wrapper">
        <div class="financier__content">
            <p>
                <?= get_field('financier_top_content'); ?>
                <span><?= get_field('financier_ccp'); ?></span>
                <span><?= get_field('financier_bnp'); ?></span>
            </p>
            <span><?= get_field('financier_bottom_content'); ?></span>
        </div>
        <?php get_template_part('components/monnaie-list'); ?>
    </div>
</article>
