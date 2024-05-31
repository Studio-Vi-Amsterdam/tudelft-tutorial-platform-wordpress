export default function quizFunctionality() {
    $(document).on('click', '.answer-wrapper', function() {

        const parent = $(this).closest('.answers-wrapper');

        if (parent.hasClass('answered')) {
            return;
        }

        const isCorrect = $(this).attr('is_correct');
        
        if (isCorrect) {
            $(this).addClass('correct-answer');
        }
        else {
            $(this).addClass('incorrect-answer');
        }

        parent.addClass('answered');
    });
}