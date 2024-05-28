<?php
/**
 * Block Name: Quiz Block
 * 
 */
?>
<div class="tutorial__content text">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="quiz">
        <p>
            <small>
                <?php the_field('tu-delft-quiz_question'); ?>
            </small>
        </p>
        <div class="quiz__wrapper">
            <?php if (have_rows( 'tu-delft-quiz_answers' )): ?>
                <?php while (have_rows( 'tu-delft-quiz_answers' )): the_row(); ?>
                    <div class="quiz__item">
                        <input type="radio" id="answer<?php echo get_row_index(); ?>" name="answer<?php echo get_row_index(); ?>" data-valid="valid">
                        <label id="answer<?php echo get_row_index(); ?>">
                            <small><?php the_sub_field('tu-delft-quiz_answer'); ?></small>
                            Lorem ipsum dolor sit amet consectetur.
                        </label>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>