<?php
/**
 * Block Name: Quiz Block
 * 
 */

 $answer_labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
?>
<?php if ( $title = get_field('tu-delft-quiz_title') ) : ?>
    <h4><?php echo $title; ?></h4>
<?php endif; ?>
<div class="tutorial__content text">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="tutorial__content text">
        <div class="quiz">
            <p>
                <small>
                <?php the_field('tu-delft-quiz_question'); ?>
                </small>
            </p>
            <div class="quiz__wrapper">
                <?php 
                    if (have_rows( 'tu-delft-quiz_answers' )):
                        $answers = get_field('tu-delft-quiz_answers');
                        shuffle($answers);
                ?>
                        <?php foreach( $answers as $i => $answer ) : ?>
                            <div class="quiz__item">
                                <input 
                                    type="radio" 
                                    id="quest<?php echo $i + 1; ?>" 
                                    name="<?php the_field('tu-delft-quiz_question'); ?>" 
                                    data-valid="<?php echo $answer['tu-delft-quiz_is_correct'] ? 'valid' : 'invalid' ?>"
                                >
                                <label id="quest<?php echo $i + 1; ?>">
                                    <small>Answer <?php echo $answer_labels[$i]; ?></small>
                                    <?php echo $answer['tu-delft-quiz_answer']; ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>