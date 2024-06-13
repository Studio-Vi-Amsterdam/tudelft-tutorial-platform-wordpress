<?php

use TuDelft\Theme\Modules\Lab\Lab;

    $theme_url = get_template_directory_uri();
    
    $categories = get_field('lab-type', get_the_ID());

    if ( empty($categories) ) {
        $categories = Lab::get_lab_types();
    } else {
        $categories = Lab::get_sub_categories( $categories );
    }

    $grouped_subjects = Lab::get_labs_grouped_by_lab_type( $categories );
?>

<section class="cards-with-categories">
    <div class="cards-with-categories__categories categories" data-scrollbar>
        <div class="categories__wrapper flex">
            <?php foreach ( $categories as $key => $category ) :  ?>
                <div class="categories__item <?php echo $key === 0 ? 'categories__item--active transition' : '' ?>" data-category-target="chapter-<?php echo $key; ?>">
                    <a href="#"><?= $category['category']->name; ?>
                        <span class="categories__bg"></span>
                        <span class="categories__text"><span><?= $category['category']->name; ?></span></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="cards-with-categories__wrapper">
        <?php foreach ( $categories as $key => $category ) :  ?>
            <div class="cards-with-categories__content <?php echo $key === 0 ? 'active' : ''; ?>" data-category-content="chapter-<?php echo $key; ?>">
                <?php foreach ( $category['subcategories'] as $subcategory ) : ?>
                    <div class="cards-with-categories__item accordion">
                        <div class="accordion__head flex items-center justify-between">
                            <h2><?php echo $subcategory->name; ?></h2>
                            <button aria-label="open accordion"></button>
                        </div>
                        <div class="accordion__content">
                            <div class="accordion__content-wrapper grid lg:grid-cols-2">
                                <?php 
                                    // loop through grouped subjects and display by subcategory
                                    foreach ( $grouped_subjects[$subcategory->name] as $course ) : 
                                ?>
                                    <a href="<?php the_permalink($course->ID); ?>" class="card-with-image">
                                        <div class="card-with-image__wrapper sm:flex">
                                            <figure class="card-with-image__image">
                                                <img  width="208" height="280" src="<?= $theme_url ?>/src/img/card-with-image/card1.jpg" alt="image">
                                            </figure>
                                            <div class="card-with-image__content">
                                                <h4><?php echo $course->post_title; ?></h4>
                                                <p><?php echo get_field('description', $course->ID); ?></p>
                                                <div class="arrow">
                                                    <svg width="14" height="22">
                                                        <use href="<?= $theme_url ?>/src/sprite.svg#arrow-large"></use>
                                                    </svg>
                                                    <svg width="38" height="3">
                                                        <use href="<?= $theme_url ?>/src/sprite.svg#line"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>