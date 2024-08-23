<section class="team">
    <h2>L'équipe</h2>
    <!-- add more team members on wordpress whit img ,.. -->
    <div class="team__container">
        <?php
        $teammember = new WP_Query([
            'post_type' => 'team-member',
            'posts_per_page' => 5,
        ]);
        if ($teammember->have_posts()) :
            while ($teammember->have_posts()) : $teammember->the_post();
                $desc = get_field('member_desc');
                $image = get_field('member_image');
                $image_url = $image['url'] ?? '';
                $content = get_field('member_content');
                $work = get_field('member_work');
                ?>
                <div class="team__container__card">
                    <h3 aria-level="3" role="heading" itemprop="name"><?= esc_html($desc); ?></h3>
                    <span><?= esc_html($work); ?></span>
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
    <div class="team__contact">
        <span>Faites partie de l'équipe&nbsp;!</span>
        <p>Nous apprécions toute l'aide que vous pouvez nous apporter, qu'elle soit petite ou grande.</p>
        <div class="team__contact__button cta">
            <a href="<?= get_post_type_archive_link('contact'); ?>">Contact</a>
        </div>
    </div>
</section>