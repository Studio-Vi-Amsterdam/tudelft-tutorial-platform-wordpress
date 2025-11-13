import Lenis from "lenis";

export function smoothScroll(lenis) {
	let pagePosition = 0;
	const footer = $(".footer");
	const tutorialAside = $(".tutorial__aside");
	const tutorialNav = $(".tutorial__mobile-nav");
	const filter = $(".filter__content");
	const filterFader = $(".filter__fader");
	const tutorialNavFader = $(".tutorial__fader");

	lenis.start();
	lenis.scrollTo(0);

	lenis.on("scroll", ({ scroll }) => {
		pagePosition = scroll;

		const windowWidth = $(window).innerWidth();
		const windowHeight = $(window).innerHeight();

		if (windowWidth >= 767) {
			const offsetTop = footer.offset().top
			const container = $(".footer__container")
			const value = pagePosition + windowHeight - offsetTop - container.outerHeight()
			if ( value <= 0 ) {
				container.css(
					"transform",
					`translateY(${value + "px"})`
				);
			}
		}

		if (windowWidth < 768) {
			tutorialAside.css(
				"top",
				pagePosition +
					windowHeight -
					$(".tutorial__aside-height").outerHeight(),
			);
			filter.css("top", pagePosition + windowHeight);
		}

		// $(".header").css("top", pagePosition);
		$(".nav").css("top", pagePosition);

		if (pagePosition + windowHeight >= $(".disabled-horizontal-scroll").height() - 100) {
			tutorialNav.addClass("hidden");
		} else {
			tutorialNav.removeClass("hidden");
		}

		if (
			windowWidth < 768 &&
			pagePosition + windowHeight < $(".disabled-horizontal-scroll").outerHeight()
		) {
			filterFader.css("top", pagePosition);
			filter.css("top", pagePosition + windowHeight);
			tutorialNav.css(
				"top",
				pagePosition + windowHeight - tutorialNav.outerHeight(),
			);
			tutorialNavFader.css("top", pagePosition);
			tutorialAside.css(
				"top",
				pagePosition +
					windowHeight -
					$(".tutorial__aside-height").outerHeight(),
			);
		}

		if (
			windowWidth < 768 &&
			pagePosition + windowHeight >=
				$(".disabled-horizontal-scroll").outerHeight() - filter.outerHeight() - windowHeight
		) {
			filterFader.css("display", "none");
			filter.css("display", "none");
		} else if (
			windowWidth < 768 &&
			pagePosition + windowHeight <
				$(".disabled-horizontal-scroll").outerHeight() - filter.outerHeight() - windowHeight
		) {
			filterFader.css("display", "block");
			filter.css("display", "flex");
		}
	});

	document.querySelector('.header__account').addEventListener('click', function(e) {
		window.location.href = e.currentTarget.dataset.href
		
	})

	// Set initial scroll position
	lenis.scrollTo(0, { immediate: true });

	$("[data-next], [data-prev]").on("click", function () {
		lenis.scrollTo(0, { immediate: true });
	});

		document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
			anchor.addEventListener("click", function (e) {
				if (this.getAttribute("href") && this.getAttribute("href") !== "#") {
					e.preventDefault();
					const scrollToOptions = {
						offset: -100,
					};
					lenis.scrollTo(this.getAttribute("href"), scrollToOptions, {
						duration: 1,
					});
				}
			});
		});
	

	return lenis;
}
