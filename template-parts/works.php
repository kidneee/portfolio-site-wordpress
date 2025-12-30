<!-- 制作実績 works -->
<section id="works" class="works">
    <div class="l-section__inner works__inner">
        <h2 class="l-section__title">制作実績</h2>
        <div class="works__content">
            <div class="c-tabs">
                <ul class="c-tabs__list">
                    <li class="c-tabs__item active" tabindex="0" data-type="static">
                        <span class="c-tabs__item-title">静的サイト</span>
                    </li>
                    <li class="c-tabs__item" tabindex="0" data-type="dynamic">
                        <span class="c-tabs__item-title">動的サイト</span>
                    </li>
                </ul>
                <div class="c-tabs__content">
                    <!-- 静的サイト -->
                    <div class="c-tabs__panel active" data-panel="static">
                        <h3 class="sr-only">静的サイト制作実績</h3>
                        <ul class="works__list">
                            <?php
                            $args = array(
                                'post_type' => 'works',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'works_type',
                                        'field' => 'slug',
                                        'terms' => 'static',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                            ?>
                                    <li class="works__item">
                                        <article class="works__card">
                                            <a href="<?php the_permalink(); ?>" class="works__card-link">
                                                <div class="works__card-image">
                                                    <?php
                                                    $image = get_field('works_image');
                                                    if ($image) {
                                                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr(get_the_title()) . '" class="works__card-img">';
                                                    }
                                                    ?>
                                                </div>
                                                <h4 class="works__card-tile"><?php the_title(); ?></h4>
                                                <p class="works__card-keywords"><?php the_excerpt(); ?></p>
                                            </a>
                                        </article>
                                    </li>
                            <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </ul>
                    </div>

                    <!-- 動的サイト -->
                    <div class="c-tabs__panel" data-panel="dynamic">
                        <h3 class="sr-only">動的サイト制作実績</h3>
                        <ul class="works__list">
                            <?php
                            $args = array(
                                'post_type' => 'works',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'works_type',
                                        'field' => 'slug',
                                        'terms' => 'dynamic',
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                            ?>
                                    <li class="works__item">
                                        <article class="works__card">
                                            <a href="<?php the_permalink(); ?>" class="works__card-link">
                                                <div class="works__card-image">
                                                    <?php
                                                    $image = get_field('works_image');
                                                    if ($image) {
                                                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr(get_the_title()) . '" class="works__card-img">';
                                                    }
                                                    ?>
                                                </div>
                                                <h4 class="works__card-tile"><?php the_title(); ?></h4>
                                                <p class="works__card-keywords"><?php the_excerpt(); ?></p>
                                            </a>
                                        </article>
                                    </li>
                            <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
