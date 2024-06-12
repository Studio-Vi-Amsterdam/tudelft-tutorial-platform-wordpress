<?php $theme_url = get_template_directory_uri() ?>
<section class="section-wrapper">
    <div class="section-wrapper__text">
        <div class="text">
            <h2>DIGIPEDIA</h2>
            <h3><?php the_field('title', get_the_ID()); ?></h3>
            <p><?php the_field('content', get_the_ID()); ?></p>
        </div>
        <div class="form" id="feedback-form">
            <form action="#">
                <div class="field" id="dropdown">
                    <div class="field__dropdown" data-dropdown>
                        <label>Feedback about</label>
                        <div class="field__dropdown-head flex items-center justify-between" data-dropdown-open>
                           <span>Feedback about</span>
                           <svg width="20" height="20">
                             <use href="<?= $theme_url ?>/src/sprite.svg#select"></use>
                           </svg>
                        </div>
                        <div class="field__dropdown-content" >
                            <div>
                                <?php
                                    if (have_rows('feedback_options', get_the_ID())) :
                                        while (have_rows('feedback_options', get_the_ID())) : the_row();
                                ?>
                                    <div class="field__dropdown-item">
                                        <input type="radio" id="<?php echo sanitize_title(get_sub_field('value')); ?>" name="radio">
                                        <label for="<?php echo sanitize_title(get_sub_field('value')); ?>">
                                            <?php the_sub_field('value'); ?>
                                        </label>
                                    </div>
                                <?php
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field field--textarea" data-scrollbar>
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Message" data-scrollbar></textarea>
                    <span data-text></span>
                </div>
                <button class="btn" type="submit">
                    <span>Give feedback</span>
                    <span>Give feedback</span>
                </button>
            </form>
        </div>
    </div>
</section>