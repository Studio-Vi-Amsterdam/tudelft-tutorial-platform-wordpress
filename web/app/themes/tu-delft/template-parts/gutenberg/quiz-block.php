<?php
/**
 * Block Name: Quiz Block
 * 
 */
?>

<div class="quiz-block">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="quiz-wrapper">
        <p><?php the_field('tu-delft-quiz_question'); ?></p>
        <div class="answers-wrapper">
            <?php if (have_rows( 'tu-delft-quiz_answers' )): ?>
                TEST
                <?php while (have_rows( 'tu-delft-quiz_answers' )): the_row(); ?>
                    <div class="answer">
                        <input type="radio" id="answer" name="answer" value="answer">
                        <label for="answer"><?php the_sub_field('tu-delft-quiz_answer'); ?></label>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>