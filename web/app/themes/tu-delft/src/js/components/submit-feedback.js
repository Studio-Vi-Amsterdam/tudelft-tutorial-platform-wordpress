export const submitFeedback = () => {
    jQuery(document).on('submit', '#feedback-form', function (e) {
        e.preventDefault();
        const feedbackAbout = jQuery(".field__dropdown-head span").html().trim();
        const message = jQuery("#message").val().trim();

        // empty feedback about
        if (feedbackAbout === 'Feedback about'){ 
            jQuery("#dropdown").addClass("error");
            return;
        }
        else {
            jQuery("#dropdown").removeClass("error");
        }

        // empty message
        if (!message) {
            jQuery("#message").addClass("error");
            return;
        }
        else {
            jQuery("#message").removeClass("error");
        }

        let formData = new FormData();
        formData.append('feedback_about', feedbackAbout);
        formData.append('message', message);
        formData.append('action', 'submit_feedback');
        formData.append('nonce', ajax_nonce);

        jQuery.ajax({
            url: ajax_url,
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: (response) => {
                alert('Feedback submitted successfully');
                location.reload();
            },
        });
    });
}
export const destroySubmitFeedback = () => {
	jQuery(document).off('submit', '#feedback-form')
}