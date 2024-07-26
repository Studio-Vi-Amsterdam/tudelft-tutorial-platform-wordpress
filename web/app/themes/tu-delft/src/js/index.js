// libs
import "slick-carousel";
import 'slick-carousel/slick/slick.scss';
import barba from '@barba/core';
import 'highlight.js/styles/atom-one-dark.css';
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
import {destroySubmitFeedback, submitFeedback} from "./components/submit-feedback";
import { copyLink } from "./components/copy-link";
import { zoomImage } from "./components/zoom-image";
import { headerSearch } from "./components/search";
import { codeBlock } from "./components/code-block";


export function runAfterDomLoad() {
    $(window).on('load', function () {
        $('.tutorial__main').removeClass('transition')
        let timeout = 430
        $('.preloader').removeClass('loaded').addClass('reloaded')
        setTimeout(() => {
            $('.preloader').addClass('loaded')
            $('body').removeClass('reloaded').addClass('loaded').removeClass('opacity')
        }, 1000);
        setTimeout(() => {
            $('.preloader').removeClass('loaded').removeClass('reloaded')
        }, 1620);
        barba.init({
            timeout: 430,
            debug: true,
            transitions: [
                {
                    leave: async (data) => {
                        $('.modal-window--active').removeClass('modal-window--active')
                        $('.modal-window__item--active').removeClass('modal-window__item--active')
                        $('.tutorial__main').removeClass('transition')
                        $('.preloader').removeClass('loaded').addClass('reloaded')
                        $('.fixed-navigation').removeClass('animated')
                        $('body').addClass('reloaded').removeClass('loaded')
                        setTimeout(() => {
                            $('body').removeClass('reloaded')
                        }, 430);
                        await delay(430)
                    },
                    enter: (data) => {
                        timeout = 0
                        setTimeout(() => {
                            $('body').removeClass('reloaded').addClass('loaded')
                            $('.preloader').addClass('loaded').removeClass('reloaded')
                        }, 120);
                        setTimeout(() => {
                            $('.preloader').removeClass('loaded')
                        }, 750);
                    },
                },
            ],
            views: [{
                namespace: 'page',
                beforeEnter() {
									destroySubmitFeedback()
                },
                afterEnter() {
                    pagePreloader()
                    const firstItem = $('.accordion__head').first()
                    firstItem.addClass('opened')
                    firstItem.next('.accordion__content').css('overflow', 'unset').css('pointer-events', 'all')
                    setTimeout(() => {
                        $('body').removeClass('preload')
                        tabOfContent()
                        smoothScroll()
                        initMenu()
                        tutorials()
                        showSearchBar()
                        changeCategory()
                        accordion()
                        openDropdown()
                        submitFeedback()
                        initPagination()
                        openFilter()
                        textareaScrollBar()
                        copyLink()
                        zoomImage()
                        headerSearch()
                        new ModalWindow(ModalVideoWindow, ModalImageWindow, ModalContentWindow)
												codeBlock()
                    }, timeout);
                }
            }]
        })

    })
}
