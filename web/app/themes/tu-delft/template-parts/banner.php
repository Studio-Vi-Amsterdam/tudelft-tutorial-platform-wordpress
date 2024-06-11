<?php $theme_url = get_template_directory_uri() ?>
<section class="banner">
    <div class="banner__wrapper md:flex items-start justify-between">
        <figure class="banner__bg">
            <img  width="1224" height="272" src="<?= $theme_url ?>/src/img/banner.jpg" alt="image">
        </figure>
        <div class="banner__title">
            <h1>
                <small><?php the_field( 'banner_section_welcome_small_text', get_the_ID() ); ?></small>
                <?php the_field( 'banner_section_title', get_the_ID() ); ?>
            </h1>
        </div>
        <div class="banner__content">
            <p><?php the_field( 'banner_section_content', get_the_ID() ); ?></p>
            <div class="banner__link">
                <a href="<?php the_field( 'banner_section_link_url', get_the_ID() ); ?>" class="link link--white">
                    <?php the_field( 'banner_section_link_text', get_the_ID() ); ?>
                </a>
            </div>
        </div>
    </div>
</section>