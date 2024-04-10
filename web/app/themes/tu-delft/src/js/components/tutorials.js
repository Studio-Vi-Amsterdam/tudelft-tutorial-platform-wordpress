export function tutorials() {
    const nextBtn = $('[data-next]')
    const prevBtn = $('[data-prev]')
    let numberOfTab = 0
    let target = 'chapter-0'
    if (document.querySelector('.tutorial')) {
        $('.titles__item').eq(0).addClass('titles__item--opened')
        $('.titles__head').on('click', function (e) {
            $(this).parent().addClass('titles__item--opened')
            $('.titles__head').not(this).parent().removeClass('titles__item--opened')
        })
    }


    const tabs = $('[data-tab-target]')
    const tabContents = $('[data-tab-content]')
    tabs.on('click', function() {
        $('.tutorial__main').removeClass('prev-side')
        target = $(this).data('tab-target')
        numberOfTab = target[target.length -1]
        setTimeout(() => {
            addActiveTab(target)
        }, 50);
    })
    nextBtn.on('click', function(e) {
        $('.tutorial__main').removeClass('prev-side')
        e.preventDefault();
        setTimeout(() => {
            ++numberOfTab;
            addActiveTab(target.slice(0,-1) + (+target[target.length -1] + 1))
            target = target.slice(0,-1) + (+target[target.length -1] + 1)
        }, 50);
    })
    prevBtn.on('click', function(e) {
        $('.tutorial__main').addClass('prev-side')
        e.preventDefault();
        setTimeout(() => {
            --numberOfTab;
            addActiveTab(target.slice(0,-1) + (+target[target.length -1] - 1))
            target = target.slice(0,-1) + (+target[target.length -1] - 1)
        }, 50);
    })
    function addActiveTab(target) {
        tabContents.removeClass('inactive')
        tabs.not(`[data-tab-target="${target}"]`).removeClass('active')
        $(`[data-tab-target="${target}"]`).addClass('active')
        $('[data-tab-content].active').not(`[data-tab-content="${target}"]`).addClass('inactive')
        $(`[data-tab-content="${target}"]`).addClass('active')
        $(`[data-tab-content="${target}"]`).css('overflow', 'unset')
        tabContents.not(`[data-tab-content="${target}"]`).removeClass('active')
        setTimeout(() => {
            tabContents.not(`[data-tab-content="${target}"]`).removeClass('inactive')
            tabContents.not(`[data-tab-content="${target}"]`).css('overflow', 'hidden')
        }, 500);
        if($(`[data-tab-target="${target.slice(0,-1) + (+numberOfTab + 1)}"]`).length === 0) {
            nextBtn.addClass('disabled')
        } else {
            nextBtn.removeClass('disabled')
        }
        if($(`[data-tab-target="${target.slice(0,-1) + (+numberOfTab - 1)}"]`).length === 0) {
            prevBtn.addClass('disabled')
        } else {
            prevBtn.removeClass('disabled')
        }
    }
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