<section class="hero-text">
    <div class="hero-text__content">
        <h2><?php the_field( 'hero_section_title', get_the_ID() ); ?></h2>
        <p><?php the_field( 'hero_section_content', get_the_ID() ); ?></p>
        <div class="hero-text__link">
            <a href="<?php the_field( 'hero_section_link_url', get_the_ID() ); ?>" class="link">
                <?php the_field( 'hero_section_link_text', get_the_ID() ); ?>
            </a>
        </div>
    </div>
</section>