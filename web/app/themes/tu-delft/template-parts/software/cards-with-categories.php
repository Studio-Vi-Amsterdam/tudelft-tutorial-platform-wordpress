<?php 
    use TuDelft\Theme\Modules\Software\Software;
    $theme_url = get_template_directory_uri();

    // TODO: filtering currently follows initial filter groups, but this needs to be changed as content repeats a lot. JavaScript filtering way needs to be changed
    $softwares = Software::get_all_softwares();

    $filter_groups = [
        'chapter_0' => 'All',
        'chapter_1' => 'A B C',
        'chapter_2' => 'D E F',
        'chapter_3' => 'G H I',
        'chapter_4' => 'J K L',
        'chapter_5' => 'M N O',
        'chapter_6' => 'P Q R',
        'chapter_7' => 'S T U',
        'chapter_8' => 'V W X',
        'chapter_9' => 'Y Z'
    ];

    // group softwares by first letter
    $grouped_softwares = [];

    foreach ($softwares as $software) {
        $first_letter = strtoupper(substr($software->post_title, 0, 1));

        if (!isset($grouped_softwares[$first_letter])) {
            $grouped_softwares[$first_letter] = [];
        }

        $grouped_softwares[$first_letter][] = $software;
    }

    $final_group_softwares = [];
    $final_group_softwares['chapter_0'] = $softwares;

    foreach ($filter_groups as $key => $filter_group) {
        if ($key === 'chapter_0') {
            continue;
        }

        $letters = explode(' ', $filter_group);

        $filtered_softwares = [];

        foreach ($letters as $letter) {
            if (isset($grouped_softwares[$letter])) {
                $filtered_softwares = array_merge($filtered_softwares, $grouped_softwares[$letter]);
            }
        }

        $final_group_softwares[$key] = $filtered_softwares;
    }
?>
<section class="cards-with-categories">
    <div class="cards-with-categories__categories categories" data-scrollbar>
        <div class="categories__wrapper flex">
            <?php foreach ($filter_groups as $key => $filter_group): ?>
                <div class="categories__item <?php echo $key === 'chapter_0' ? 'categories__item--active' : '' ?>" data-category-target="<?php echo $key ?>">
                    <a href="#"><?php echo $filter_group; ?>
                        <span class="categories__bg"></span>
                        <span class="categories__text"><span><?php echo $filter_group; ?></span></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="cards-with-categories__wrapper">
        <?php foreach ($final_group_softwares as $key => $group_softwares): ?>
            <div class="cards-with-categories__content <?php echo $key === 'chapter_0' ? 'active' : ''; ?>" data-category-content="<?php echo $key ?>" data-pages="21">
                <div class="grid-links grid-links--three-columns grid lg:grid-cols-2">
                    <?php 
                        foreach ($group_softwares as $software):
                            $image = get_field('featured_image', $software->ID);
                    ?>
                        <a href="<?php echo get_permalink($software->ID) ?>" class="software-link" data-card>
                            <div class="software-link__wrapper">
                                <div class="software-link__row  flex items-start">
                                    <h6>
                                        <?php echo $software->post_title ?>
                                    </h6>
                                    <?php if( $image ) : ?>
                                    <figure class="software-link__icon">
                                        <img width="44" height="40" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $software->post_title ?> icon">
                                    </figure>
                                    <?php endif; ?>
                                </div>
                                <div class="arrow">
                                    <svg width="14" height="22">
                                        <use href="<?php echo $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                    </svg>
                                    <svg width="38" height="3">
                                        <use href="<?php echo $theme_url ?>/src/sprite.svg#line"></use>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="cards-with-categories__pagination pagination flex items-center justify-center">
                    <a href="#" class="pagination__button pagination__button--prev flex items-center justify-center">
                        <svg width="20" height="20">
                            <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                        </svg>

                    </a>
                    <div class="pagination__list">
                        <div class="pagination__bg"></div>
                        <ul class="flex items-center justify-center">

                        </ul>
                    </div>
                    <a href="#" class="pagination__button pagination__button--next flex items-center justify-center">
                        <svg width="20" height="20">
                            <use href="<?= get_template_directory_uri() ?>/src/sprite.svg#arrow-right"></use>
                        </svg>

                    </a>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>
</section>