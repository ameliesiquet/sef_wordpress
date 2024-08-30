<div class="monnaie-list">
    <ul>
        <?php
        $monnaie = new WP_Query([
            'post_type' => 'monnaie',
            'posts_per_page' => 6,
        ]);
        if ($monnaie->have_posts()) :
            while ($monnaie->have_posts()) : $monnaie->the_post();
                $number = get_field('monnaie_amount');
                $content = get_field('monnaie_content');
                ?>
                <li>
                    <span><?= esc_html($number); ?></span>
                    <?= esc_html($content); ?>
                </li>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Pas trouvé des articles</p>';
        endif;
        ?>
    </ul>
</div>
