export const bookmarkButtons = async () => {
	$(document).on('click', '.setBookmarked', function (e) {
		e.preventDefault()
		const $button = $(this)
		const dataAttr = $button.attr('data-bookmarked')

		if (dataAttr === 'true') {
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'remove_bookmark',
					post_id: $button.data('postid'),
				},
				success: function (response) {
					$button.attr('data-bookmarked', 'false')
					console.log('Bookmark removed', response)
				},
				error: function (err) {
					console.error('Error removing bookmark:', err)
				},
			})
		} else {
			// ajax request to add bookmark
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'add_bookmark',
					post_id: $button.data('postid'),
				},
				success: function (response) {
					$button.attr('data-bookmarked', 'true')
					console.log('Bookmark added', response)
				},
				error: function (err) {
					console.error('Error adding bookmark:', err)
				},
			})
		}
	})
	$(document).on('click', '.bookmark-button', function (e) {
		e.preventDefault()
		console.log('Clicked .bookmark-button:', this)
		const $button = $(this)
		const dataAttr = $button.attr('data-bookmarked')
		const $post = $button.closest('article')
		const postId = parseInt($button.data('postid'), 10) || null

		if (dataAttr === 'true') {
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'remove_bookmark',
					post_id: postId,
				},
				success: function (response) {
					$button.attr('data-bookmarked', 'false')
					$post.remove()
					console.log('Bookmark removed from post', response)
				},
				error: function (err) {
					console.error('Error removing bookmark from post:', err)
				},
			})
		} else {
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'add_bookmark',
					post_id: postId,
				},
				success: function (response) {
					$button.attr('data-bookmarked', 'true')
					console.log('Bookmark added to post', response)
				},
				error: function (err) {
					console.error('Error adding bookmark to post:', err)
				},
			})
		}
	})
}
export const ViewMoreBookmarks = () => {
	const button = document.querySelector('[data-view-more-bookmarks]')
	const body = $('[data-bookmakrs]')

	if (button) {
		button.addEventListener('click', (e) => {
			button.disabled = true
			const page = parseInt(button.getAttribute('data-view-more-bookmarks')) + 1
			const maxPage = parseInt(button.getAttribute('data-max-page'))
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'get_more_bookmarks',
					page: page,
				},
				success: function (response) {
					button.setAttribute('data-view-more-bookmarks', page)
					body.append(response.data.html)
					button.disabled = false
					if (maxPage === page) {
						button.classList.add('hidden')
					}
				},
			})
		})
	}
}
export const ViewMoreVideos = () => {
	const button = document.querySelector('[data-view-more-videos]')
	const body = $('[data-wathced-videos]')

	if (button) {
		button.addEventListener('click', (e) => {
			button.disabled = true
			const page = parseInt(button.getAttribute('data-view-more-videos')) + 1
			const maxPage = parseInt(button.getAttribute('data-max-page'))
			$.ajax({
				url: ajax_url,
				type: 'POST',
				data: {
					action: 'get_more_watched_videos',
					page: page,
				},
				success: function (response) {
					button.setAttribute('data-view-more-videos', page)
					body.append(response.data.html)
					button.disabled = false
					if (maxPage === page) {
						button.classList.add('hidden')
					}
				},
			})
		})
	}
}
