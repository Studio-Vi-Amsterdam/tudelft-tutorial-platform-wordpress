import Scrollbar from "smooth-scrollbar";
export function smoothScroll() {
	let pagePosition = 0
	const tutorialAside = $('.tutorial__aside')
	const tutorialNav = $('.tutorial__mobile-nav')
	const tutorialNavFader = $('.tutorial__fader')
	tutorialNav.css('top', pagePosition + $(window).innerHeight() - tutorialNav.outerHeight())
	const scroller = document.querySelector('#scroll-container');
	const bodyScrollBar = Scrollbar.init(scroller, { damping: 0.1, delegateTo: document, alwaysShowTracks: true, });
	Scrollbar.initAll()
	if($(window).innerWidth() < 768) {
		tutorialAside.css('top', pagePosition + $(window).innerHeight() - $('.tutorial__aside-height').outerHeight())
	}

	bodyScrollBar.addListener(({ offset }) => {
		if($('.tutorial--active').length > 0) {
			bodyScrollBar.scrollTo(0, pagePosition, 0);
		} else {
			pagePosition = offset.y
		}
		tutorialNav.css('top', pagePosition + $(window).innerHeight() - tutorialNav.outerHeight())
		tutorialNavFader.css('top', pagePosition)
		if(pagePosition + $(window).innerHeight() >= $('.scroll-content').height() - 100) {
            tutorialNav.addClass('hidden')

        } else {
            tutorialNav.removeClass('hidden')
        }
		if($(window).innerWidth() < 768) {
			tutorialAside.css('top', pagePosition + $(window).innerHeight() - $('.tutorial__aside-height').outerHeight())
		}
	});

	bodyScrollBar.setPosition(0, 0);

	$('[data-tab-target], [data-next], [data-prev]').on('click', function() {
		bodyScrollBar.scrollTo(0, 0, 0);
	})

	$('a[href*=\\#]').on('click', function () {
		let anchor 
		if($(this).attr('href') !== '#' && $(this).attr('href').length > 1) {
			anchor = $(`#${$(this).attr('href').split('#')[1]}`)
		}
		if (anchor && anchor.length > 0) {
			bodyScrollBar.scrollTo(0, anchor.offset().top + pagePosition - 100, 1500);
		}
	});

	let hash = $(location).attr('hash');
	if($(`${hash}`).length > 0) {
		let anchor = $(`${hash}`)
		bodyScrollBar.scrollTo(0, anchor.offset().top + pagePosition - 100, 1500);

	}

}