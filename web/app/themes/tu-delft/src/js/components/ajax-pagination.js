export const initAjaxPagination = () => {
	let isLoading = false
	const parent = $('[data-pagination]')
	const pagination = $('#dynamic-pagination')
	const nextButton = $('.pagination__button--next', parent)
	const prevButton = $('.pagination__button--prev', parent)
	const archive = $('[data-archive]')
	const action = archive.attr('data-archive')

	const makeRequest = async (page) => {
		if (isLoading) return
		page = Math.max(1, page)
		isLoading = true
		archive.addClass('loading')
		try {
			const res = await $.ajax({
				url: ajax_url,
				type: 'POST',
				dataType: 'json',
				data: {
					action,
					page,
					per_page: archive.attr('data-per-page'),
					meta_query: archive.attr('data-meta-query'),
				},
			})
			if (!res?.success) return
			archive.html(res.data.html || '')
			pagination.html(res.data.pagination_html || '')
			archive.attr('data-page', String(res.data.current || page))
			archive.attr('data-total', String(res.data.total || page))
			toggleDisabled(prevButton, res.data.current <= 1)
			toggleDisabled(nextButton, res.data.current >= res.data.total)
		} finally {
			isLoading = false
			archive.removeClass('loading')
		}
	}


	parent.on('click', '.pagination-number button:not(.active)', function (e) {
		e.preventDefault()
		const pageIndex = Number($(this).attr('data-page')) || 1
		makeRequest(pageIndex)
	})

	prevButton.on('click', (e) => {
		e.preventDefault()
		const currentPage = parseInt(archive.attr('data-page'))
		if (currentPage > 1) makeRequest(currentPage - 1)
	})

	nextButton.on('click', (e) => {
		e.preventDefault()
		const currentPage = parseInt(archive.attr('data-page'))
		const pageCount = parseInt(archive.attr('data-total'))
		if (currentPage < pageCount) makeRequest(currentPage + 1)
	})

	const toggleDisabled = (button, disabled) => {
		button.toggleClass('disabled', disabled)
		button.attr('aria-disabled', disabled)
	}
}