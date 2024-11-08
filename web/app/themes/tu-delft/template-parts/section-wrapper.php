<?php $theme_url = get_template_directory_uri() ?>
<section class="section-wrapper">
    <div class="section-wrapper__title">
        <h2><?php the_field( 'cards_section_title', get_the_ID() ); ?></h2>
    </div>
        <div class="grid-links grid lg:grid-cols-2">
            <?php if( have_rows('cards_section_cards', get_the_ID()) ): ?>
                <?php while( have_rows('cards_section_cards', get_the_ID()) ): the_row(); ?>
                    <a href="<?= the_sub_field('link') ?>" class="card-with-image card-with-image--reverse card-with-image--not-full-image">
                        <div class="card-with-image__wrapper sm:flex">
                            <figure class="card-with-image__image">
                                <?php
                                    $image = get_sub_field('image');
                                ?>
                                <img  width="204" height="160" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </figure>
                            <div class="card-with-image__content">
                                <h4><?php the_sub_field('title'); ?></h4>
                                <p>
                                    <?php the_sub_field('content'); ?>
                                </p>
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
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
</section>