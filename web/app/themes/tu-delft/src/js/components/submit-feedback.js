export const submitFeedback = () => {
	jQuery(document).on("submit", "#feedback-form", function (e) {
		e.preventDefault();

		console.log("submitted");
	});
};
