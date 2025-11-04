// libs
import barba from "@barba/core";
import Lenis from "lenis";
import "highlight.js/styles/atom-one-dark.css";
import ModalContentWindow from "./components/ModalWindow/ModalContentWindow";
import ModalWindow from "./components/ModalWindow/ModalWindow";
import ModalVideoWindow from "./components/ModalWindow/ModalVideoWindow";
import { initMenu } from "./components/header";
import { tutorials } from "./components/tutorials";
import { showSearchBar } from "./components/show-search-bar";
import { smoothScroll } from "./components/smooth-scrolling";
import { tabOfContent } from "./components/toc";
import { changeCategory } from "./components/category-change";
import { accordion } from "./components/accordion";
import { openDropdown } from "./components/open-dropdown";
import { pagePreloader } from "./components/page-preloader";
import { delay } from "./components/delay";
import { initPagination } from "./components/pagination";
import { openFilter } from "./components/filters";
import { textareaScrollBar } from "./components/textarea-scrollbar";
import ModalImageWindow from "./components/ModalWindow/ModalImageWindow";
import {
	destroySubmitFeedback,
	submitFeedback,
} from "./components/submit-feedback";
import { copyLink } from "./components/copy-link";
import { zoomImage } from "./components/zoom-image";
import { headerSearch } from "./components/search";
import { codeBlock } from "./components/code-block";
import { tableHeightRow } from "./components/table-height-row";
import { readingTime } from "./components/reading-time";
import { initArticleContextMenu } from "./components/articleContextMenu";
import {
	bookmarkButtons,
	ViewMoreBookmarks,
	ViewMoreVideos,
} from "./components/bookmark-buttons";
import { initSuggestionModal } from "./components/ModalWindow/ModalSuggestions";
import { initAnchorLink } from "./components/anchor-link";
import {lazyLoad} from "./components/lazy";

let modalInstance = null;
export function initLenis() {
	const lenis = new Lenis({
		smoothWheel: true,
		smoothTouch: true,
		duration: 1.2,
		easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
	});

	function raf(time) {
		lenis.raf(time);
		requestAnimationFrame(raf);
	}

	requestAnimationFrame(raf);

	return lenis;
}

export function runAfterDomLoad() {
	$(window).on("load", function () {
		let lenis;
		$(".tutorial__main").removeClass("transition");
		let timeout = 430;
		$(".preloader").removeClass("loaded").addClass("reloaded");

		setTimeout(() => {
			$(".preloader").addClass("loaded");

			$("body")
				.removeClass("reloaded")
				.addClass("loaded")
				.removeClass("opacity");
		}, 1000);

		setTimeout(() => {
			$(".preloader").removeClass("loaded").removeClass("reloaded");
		}, 1620);

		barba.init({
			timeout: 430,
			debug: true,
			transitions: [
				{
					leave: async (data) => {
						$(".modal-window--active").removeClass("modal-window--active");
						$(".modal-window__item--active").removeClass(
							"modal-window__item--active",
						);
						$(".tutorial__main").removeClass("transition");
						$(".preloader").removeClass("loaded").addClass("reloaded");
						$(".fixed-navigation").removeClass("animated");
						$("body").addClass("reloaded").removeClass("loaded");

						if (document.querySelector(".modal-video-item__wr-iframe video")) {
							document
								.querySelector(".modal-video-item__wr-iframe video")
								.remove();
						}

						if (typeof lenis === "object") {
							lenis.destroy();
						}

						setTimeout(() => {
							$("body").removeClass("reloaded");
						}, 430);
						await delay(430);
					},
					enter: (data) => {
						timeout = 0;

						setTimeout(() => {
							$("body").removeClass("reloaded").addClass("loaded");
							$(".preloader").addClass("loaded").removeClass("reloaded");
						}, 120);

						setTimeout(() => {
							$(".preloader").removeClass("loaded");
						}, 750);

					},
				},
			],
			views: [
				{
					namespace: "page",
					beforeEnter() {
						destroySubmitFeedback();
					},
					afterEnter() {
						let hash = location.hash;
						pagePreloader();
						const firstItem = $(".accordion__head").first();
						firstItem.addClass("opened");
						firstItem
							.next(".accordion__content")
							.css("overflow", "unset")
							.css("pointer-events", "all");

						lenis = initLenis();

						setTimeout(() => {
							$("body").removeClass("preload");
							lazyLoad()
							tabOfContent();
							smoothScroll(lenis);
							initMenu();
							tutorials();
							showSearchBar();
							changeCategory();
							accordion();
							openDropdown();
							submitFeedback();
							initPagination();
							openFilter();
							textareaScrollBar();
							copyLink();
							zoomImage();
							headerSearch();
							tableHeightRow();
							readingTime();
							bookmarkButtons();
							initArticleContextMenu();
							initSuggestionModal();
							ViewMoreBookmarks();
							ViewMoreVideos();
							initAnchorLink();

							if (!modalInstance) {
								modalInstance = new ModalWindow(
									ModalVideoWindow,
									ModalImageWindow,
									ModalContentWindow,
								);
							}

							codeBlock();

							setTimeout(() => {
								const urlParams = new URLSearchParams(window.location.search);
								const videoParam = urlParams.get("video");

								document
									.querySelectorAll("iframe, [data-video-src]")
									.forEach((item) => {
										const videoSrc = item.dataset.videoSrc;
										const scrollValue = item.src;

										if (
											(videoSrc && videoSrc.includes(videoParam)) ||
											(scrollValue && scrollValue.includes(videoParam))
										) {
											lenis.scrollTo(item, {
												offset: -100,
												duration: 1,
											});
										}
									});
							}, 1200);

							setTimeout(() => {
								if ($(`${hash}`).length > 0) {
									let anchor = $(`${hash}`);
									lenis.scrollTo(anchor[0], { offset: -100, duration: 1 });
								}
							}, 1200);

						}, timeout);
					},
				},
			],
		});
	});
}
