import Scrollbar from "smooth-scrollbar";
export function smoothScroll() {
	let pagePosition = 0
	const footer = $('.footer')
	const tutorialAside = $('.tutorial__aside')
	const tutorialNav = $('.tutorial__mobile-nav')
	const filter = $('.filter__content')
	const filterFader = $('.filter__fader')
	const tutorialNavFader = $('.tutorial__fader')
	tutorialNav.css('top', pagePosition + $(window).innerHeight() - tutorialNav.outerHeight())
	const scroller = document.querySelector('#scroll-container');
	console.log(scroller);
	const bodyScrollBar = Scrollbar.init(scroller, { damping: 0.1, delegateTo: document, alwaysShowTracks: false, });
	Scrollbar.initAll()
	if($(window).innerWidth() >= 767) {
		footer.css('height', $('.footer__container').outerHeight() + 'px')
		$('.footer__container').css('top',pagePosition + $(window).innerHeight() - $('.footer__container').outerHeight() + 'px' )
	}
	if($(window).innerWidth() < 768) {
		tutorialAside.css('top', pagePosition + $(window).innerHeight() - $('.tutorial__aside-height').outerHeight())
		filter.css('top', pagePosition + $(window).innerHeight())
	}
	if($(window).innerWidth() >= 1024) {
		$('.search-bar__field').css('width', $(window).innerWidth() - $('.search-bar__field').offset().left + 'px')
	}
	bodyScrollBar.addListener(({ offset }) => {
		if($('.tutorial--active').length > 0 || $('.header--opened').length > 0 || $('.filter--opened').length) {
			bodyScrollBar.scrollTo(0, pagePosition, 0);
			scroller.classList.add('hide-scrollbar')
		} else {
			pagePosition = offset.y
			if(scroller.classList.contains('hide-scrollbar')) {
				scroller.classList.remove('hide-scrollbar')
			}
		}
		$('.header').css('top', pagePosition)
		$('.nav').css('top', pagePosition)
		if(pagePosition + $(window).innerHeight() >= $('.scroll-content').height() - 100) {
            tutorialNav.addClass('hidden')

        } else {
            tutorialNav.removeClass('hidden')
        }
		if($(window).innerWidth() < 768 && pagePosition + $(window).innerHeight() < $('.scroll-content').outerHeight()) {
			filterFader.css('top', pagePosition)
			filter.css('top', pagePosition + $(window).innerHeight())
			tutorialNav.css('top', pagePosition + $(window).innerHeight() - tutorialNav.outerHeight())
			tutorialNavFader.css('top', pagePosition)
			tutorialAside.css('top', pagePosition + $(window).innerHeight() - $('.tutorial__aside-height').outerHeight())
		}
		if($(window).innerWidth() < 768 && pagePosition + $(window).innerHeight()  >= $('.scroll-content').outerHeight() - filter.outerHeight() - $(window).innerHeight()) {
			filterFader.css('display', 'none')
			filter.css('display', 'none')
		} else if($(window).innerWidth() < 768 && pagePosition + $(window).innerHeight()  <  $('.scroll-content').outerHeight() - filter.outerHeight() - $(window).innerHeight()){
			filterFader.css('display', 'block')
			filter.css('display', 'flex')

		}
		if($(window).innerWidth() >= 767) {
			$('.footer__container').css('top',pagePosition + $(window).innerHeight() - $('.footer__container').outerHeight() + 'px' )
		}

	});

	bodyScrollBar.setPosition(0, 0);

	$('[data-next], [data-prev]').on('click', function() {
		bodyScrollBar.scrollTo(0, 0, 0);
	})

	$('a[href*=\\#]').on('click', function () {
		let anchor 
		if($(this).attr('href') !== '#' && $(this).attr('href').length > 1) {
			anchor = $(`#${$(this).attr('href').split('#')[1]}`)
		}
		if (anchor && anchor.length > 0) {
			bodyScrollBar.scrollTo(0, anchor.offset().top + pagePosition - 100, 1000);
		}
	});

	let hash = $(location).attr('hash');
	if($(`${hash}`).length > 0) {
		let anchor = $(`${hash}`)
		bodyScrollBar.scrollTo(0, anchor.offset().top + pagePosition - 100, 1000);

	}

}