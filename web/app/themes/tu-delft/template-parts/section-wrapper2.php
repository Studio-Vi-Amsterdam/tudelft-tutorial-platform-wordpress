<?php 
    $theme_url = get_template_directory_uri(); 
    
    $display_elements = get_field('recently_added_section_display_elements', get_the_ID());

    if ( empty($display_elements) ) {
        // get 2 latest tutorials
        $args = array(
            'post_type' => 'tutorial',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $tutorials_query = new WP_Query($args);

        $display_elements = $tutorials_query->posts;
    }
?>
<section class="section-wrapper">
    <div class="section-wrapper__title">
        <h2><?php the_field( 'recently_added_section_title', get_the_ID() ); ?></h2>
    </div>
        <div class="grid-links grid lg:grid-cols-2">
            <?php foreach ($display_elements as $element) : ?>
                <a href="<?php the_permalink($element->ID) ?>" class="card-with-image">
                    <div class="card-with-image__wrapper sm:flex">
                        <figure class="card-with-image__image">
                            <?php
                                $image = get_field('featured_image', $element->ID) ?: $theme_url . '/src/img/card-with-image/2d.jpg';
                            ?>
                            <img  width="208" height="280" src="<?php echo $image; ?>" alt="image">
                        </figure>
                        <div class="card-with-image__content">
                            <h4><?php echo get_the_title($element->ID); ?></h4>
                            <p><?php the_field('description', $element->ID) ?></p>
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
</section>