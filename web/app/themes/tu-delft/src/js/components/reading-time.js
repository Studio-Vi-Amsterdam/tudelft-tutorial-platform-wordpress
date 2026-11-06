export function readingTime() {
	let summaryTime = 0

	const tutorialItems = document.querySelectorAll('.tutorial__item')

	if (tutorialItems.length > 0) {
		tutorialItems.forEach((chapter) => {
			let chapterTime = 0
			const data = chapter.dataset.tabContent

			chapter.querySelectorAll('.tutorial__content').forEach((subchapter, index) => {
				if (!subchapter.classList.contains('tutorial__btns')) {
					const text = subchapter.innerText.trim()
					const wpm = 225
					const words = text.split(/\s+/).length
					let time = 0
					let id = null

					const heading = subchapter.querySelector('h4')
					if (heading) {
						id = heading.getAttribute('id')
					}
					if (words / wpm < 0.1) {
						time = 0
					} else {
						time = Math.ceil(words / wpm)
					}

					// const wrapper = document.querySelector(
					// 	`[data-tab-target="${data}"]`,
					// )?.nextElementSibling;
					// if (wrapper && time !== 0) {
					// 	const listItems = wrapper.querySelectorAll("li");
					// 	listItems.forEach((li) => {
					// 		const linkHref = li.querySelector("a").getAttribute("href");
					// 		const linkId = linkHref.split("#")[1];
					// 		if (linkId === id) {
					// 			li.innerHTML += `<span>${time} min</span>`;
					// 		}
					// 	});
					// }

					chapterTime += time
				}
			})

			if (chapterTime === 0) {
				chapterTime = 1
			}

			const chapterTab = document.querySelector(`[data-tab-target="${data}"]`)
			if (chapterTab) {
				chapterTab.innerHTML += `<span>${chapterTime} min</span>`
			}

			summaryTime += chapterTime
		})

		const navTitle = document.querySelector('.tutorial__nav h4')
		if (navTitle) {
			navTitle.innerHTML += `<span>${summaryTime} min</span>`
		}
	}
}
