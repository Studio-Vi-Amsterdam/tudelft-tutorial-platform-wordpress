<?php
/**
 * Block Name: Quiz Block
 * 
 */

 $answer_labels = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
?>

<div class="quiz-block">
    <?php
        get_template_part('template-parts/gutenberg/chapter-subtitle');
    ?>
    <div class="quiz-wrapper">
        <p><?php the_field('tu-delft-quiz-block_question'); ?></p>
        <div class="answers-wrapper">
            <?php 
                if (have_rows( 'tu-delft-quiz-block_answers' )):
                    $answers = get_field('tu-delft-quiz-block_answers');
                    shuffle($answers);
            ?>
                    <?php foreach( $answers as $i => $answer ) : ?>
                        <div 
                            class="answer-wrapper" 
                            value="<?php echo $answer['tu-delft-quiz-block_answer']; ?>"
                            is_correct = "<?php echo $answer['tu-delft-quiz-block_is_correct']; ?>"
                        >
                            <label class="answer-label"> 
                                Answer <?php echo $answer_labels[$i]; ?>
                            </label>
                            <label class="answer">
                                <?php echo $answer['tu-delft-quiz-block_answer']; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
            <?php 
                endif;
            ?>
        </div>
    </div>
</div>