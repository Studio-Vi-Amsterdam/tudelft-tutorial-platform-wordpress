// libs
import "slick-carousel";
import 'slick-carousel/slick/slick.scss';
import barba from '@barba/core';
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
import { paginationAnimation } from "./components/pagination-animation";
import { openDropdown } from "./components/open-dropdown";
import { pagePreloader } from "./components/page-preloader";
import { delay } from "./components/delay";


export function runAfterDomLoad() {
    $(window).on('load', function () {
        let timeout = 430
        $('.preloader').addClass('loaded')
        $('body').addClass('loaded')
        setTimeout(() => {
            $('.preloader').removeClass('loaded').removeClass('reloaded')
            $('body').removeClass('reloaded')
        }, 750);
        barba.init({
            timeout: 430,
            debug: true,
            transitions: [
                {
                    leave: async (data) => {
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
                beforeEnter(e) {
                    const cf_selector = "div.wpcf7 > form";
                    const cf_forms = $(e.next.container).find(cf_selector);
                    if (cf_forms.length > 0) {
                        $(cf_selector).each(function () {
                            var $form = $(this);
                            setTimeout(() => {
                                wpcf7.init($form[0]);
                            }, 1000);
                        });
                    }
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
                        paginationAnimation()
                        openDropdown()
                        new ModalWindow(ModalVideoWindow, ModalContentWindow)

                    }, timeout);
                }
            }]
        })

    })
}
