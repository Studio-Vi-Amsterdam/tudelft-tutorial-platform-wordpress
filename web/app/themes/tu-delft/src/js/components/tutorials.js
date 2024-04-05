export function tutorials() {

    if (document.querySelector('.tutorial')) {
        $('.titles__item').eq(0).find('.titles__body').slideDown()
        $('.titles__item').eq(0).toggleClass('titles__item--opened')
        $('.titles__head').on('click', function (e) {
            $(this).parent().toggleClass('titles__item--opened')
            $(this).next().slideToggle()
            $('.titles__head').not(this).parent().removeClass('titles__item--opened')
            $('.titles__head').not(this).next().slideUp()
        })
    }


    const tabs = document.querySelectorAll('[data-tab-target]')
    const tabContents = document.querySelectorAll('[data-tab-content]')

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabTarget)
            tabContents.forEach(tabContent => {
                tabContent.classList.remove('active')
            })
            tabs.forEach(tab => {
                tab.classList.remove('active')
            })
            tab.classList.add('active')
            target.classList.add('active')

        })
    })

    if ($(window).width() > 1024) {

        $('.header__submenu .menu-item-has-children').on('mouseover', function () {
            if ($(this).find('header__submenu').hasClass('active')) {
                $(this).find('header__submenu').removeClass('active')
            } else {
                $('.header__submenu').removeClass('active')
                $(this).find('header__submenu').addClass('active')
            }

        })
    }

    $('.call-tutorial-nav').on('click', function () {
        $(this).closest('.tutorial').toggleClass('tutorial--active')
    })

}