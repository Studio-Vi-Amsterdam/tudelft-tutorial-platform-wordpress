export function tutorials() {
    const currentUrl = window.location.protocol + '//' + window.location.host + window.location.pathname
    const searchParams = new URLSearchParams(document.location.search)
    let tab = searchParams.get("tab")
    const nextBtn = $('[data-next]')
    const prevBtn = $('[data-prev]')
    const tabs = $('[data-tab-target]')
    const tabContents = $('[data-tab-content]')
    let numberOfTab = 0
    let target = 'chapter-0'
    if(tab) {
        numberOfTab= +tab.slice(-1)
        target = tab.toString()
        addActiveTab(tab.toString())
    } else {
        addActiveTab('chapter-0')
    }
    if (document.querySelector('.tutorial')) {
        $('.titles__item').eq(0).addClass('titles__item--opened')
        $('.titles__head').on('click', function (e) {
            $(this).parent().addClass('titles__item--opened')
            $('.titles__head').not(this).parent().removeClass('titles__item--opened')
        })
    }


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
        searchParams.set('tab', target)
        window.history.replaceState('', '', currentUrl + '?' + searchParams.toString())
        tabs.not(`[data-tab-target="${target}"]`).removeClass('active')
        tabs.not(`[data-tab-target="${target}"]`).parent().removeClass('titles__item--opened')
        $(`[data-tab-target="${target}"]`).addClass('active')
        $('[data-tab-content].active').not(`[data-tab-content="${target}"]`).addClass('inactive')
        $(`[data-tab-content="${target}"]`).addClass('active')
        $(`[data-tab-content="${target}"]`).css('overflow', 'unset')
        $(`[data-tab-target="${target}"]`).parent().addClass('titles__item--opened')
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