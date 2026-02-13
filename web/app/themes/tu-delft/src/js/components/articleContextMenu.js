export const initArticleContextMenu = async () => {
	const menus = document.querySelectorAll('.tutorial__menu-trigger')

	if (menus) {
		menus.forEach((menu) => {
			menu.addEventListener('click', () => {
				const dataAttr = menu.dataset.opened
				if (dataAttr === 'true') {
					menu.setAttribute('data-opened', 'false')
				} else {
					menu.setAttribute('data-opened', 'true')
				}
			})
		})
	}

	const suggestionModal = document.querySelector('.modal-suggestion__inner')
	const secondSuggestionModal = document.querySelector('.modal-suggestion__second')

	if (suggestionModal && secondSuggestionModal) {
		const form = $('[data-suggestion-form]')
		const error = $('[data-error]')
		const submitButton = form.find('button[type="submit"]')
		form.on('submit', function (e) {
			e.preventDefault()

			const comment = $('input[name="comment"]').val()
			const postID = $('input[name="post-id"]').val()
			if (comment) {
				error.text('').addClass('hidden')
				submitButton.attr('disabled', 'true')
				$.ajax({
					url: ajax_url,
					type: 'POST',
					data: {
						action: 'add_comment',
						content: comment,
						postID: postID,
					},
					success: function (response) {
						if (response.success) {
							submitButton.attr('disabled', false)
							suggestionModal.classList.add('modal-suggestion__inner--hidden')
							secondSuggestionModal.classList.remove('modal-suggestion__second--hidden')
							setTimeout(() => {
								form.trigger('reset')
								suggestionModal.classList.remove('modal-suggestion__inner--hidden')
								secondSuggestionModal.classList.add('modal-suggestion__second--hidden')
							}, 8000)
						} else {
							error.text(response.data.message).removeClass('hidden')
							submitButton.attr('disabled', false)
						}
					},
					error: function (err) {
						error.text(err.responseJSON.message).removeClass('hidden')
						submitButton.attr('disabled', false)
					},
				})
			}
		})
	}
}
