<nav id="navigation" class="navigation" role="navigation" itemscope>
    <h2 class="visually_hidden" role="heading" aria-level="2">Navigation</h2>
    <div class="logo">
        <?php
        $logo = get_post(287);
        if ($logo):
        ?>
            <?php $image = get_field('nav_logo', $logo->ID); ?>
            <?php if ($image): ?>
            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
        <?php else: ?>
            <p>Image not found</p>
        <?php endif; ?>
        <?php else: echo"Years not found" ?>
        <?php endif; ?>
    </div>
    <div class="burger-menu">
        <input type="checkbox" name="burger-toggle" id="burger__toggle">
        <label class="visually_hidden" for="burger__toggle">Burger Menu</label>
        <div class="burger-wrapper">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="burger-menu__list">
            <?php
            $nav = new WP_Query([
                'post_type' => 'navigation-list',
                'posts_per_page' => 8,
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
</nav>
