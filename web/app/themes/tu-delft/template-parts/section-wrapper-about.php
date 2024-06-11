<?php $theme_url = get_template_directory_uri() ?>
<section class="section-wrapper">
    <div class="section-wrapper__text">
        <div class="text">
            <h2>DIGIPEDIA</h2>
            <h3><?php the_field('title', get_the_ID()); ?></h3>
            <p><?php the_field('intro, get_the_ID()'); ?></p>
        </div>
        <?php 
            $image = get_field('image', get_the_ID());
            if ($image) : 
        ?>
                <div class="image">
                    <figure>
                        <img 
                            data-image-src="<?php echo $image['url']; ?>" 
                            width="808" 
                            height="454" 
                            src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $image['alt']; ?>"
                        />
                        <?php
                            $caption = get_field('caption', get_the_ID());
                            if ($caption) :
                        ?>
                            <figcaption><?php echo $caption; ?></figcaption>
                        <?php endif; ?>
                    </figure>
                </div>
        <?php endif; ?>
        <?php 
            if (have_rows('sections', get_the_ID())) :
                while (have_rows('sections', get_the_ID())) : 
                    the_row();
                    $title = get_sub_field('section_title');
                    $content = get_sub_field('section_content');
                    $has_cta = get_sub_field('has_cta');

                    if ($has_cta) {
                        $cta_label = get_sub_field('cta_label');
                        $cta_link = get_sub_field('cta_link');
                    }
        ?>
                <div class="text">
                    <h4><?php echo $title; ?></h4>
                    <p>
                        <small>
                            <?php echo $content; ?>
                        </small>
                    </p>
                    <?php if ($has_cta) : ?>
                        <a href="<?php echo $cta_link; ?>" class="btn btn--full-width-onmobile">
                            <span><?php echo $cta_label; ?></span>
                            <span><?php echo $cta_label; ?></span>
                        </a>
                    <?php endif; ?>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</section>