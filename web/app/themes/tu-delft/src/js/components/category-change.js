export function changeCategory() {
    let timer = 670
    if($(window).width() > 639) {
        timer = 500
    }
    if($('.cards-with-categories__categories').length > 0) {
        const categoryContents = $('[data-category-content]')
        const categories = $('.categories__item')
        changeClasses($('.categories__item--active'))
        categories.on('click', function() {
            if($('[data-category-target].categories__item--active').data('category-target').slice(-1) > $(this).data('category-target').slice(-1)) {
                $('.cards-with-categories__wrapper').addClass('prev-side')
            } else {
                $('.cards-with-categories__wrapper').removeClass('prev-side')
            }
            const target = $(this).data('category-target')
            setTimeout(() => {
                $(`[data-category-content="${target}"]`).css('overflow', 'unset')
                $(`[data-category-content="${target}"]`).addClass('active')
                $('[data-category-content].active').not(`[data-category-content="${target}"]`).addClass('inactive')
                $('[data-category-content]').not(`[data-category-content="${target}"]`).removeClass('active')
            }, 50);
            setTimeout(() => {
                categoryContents.not(`[data-category-content="${target}"]`).removeClass('inactive')
                categoryContents.not(`[data-category-content="${target}"]`).css('overflow', 'hidden')
            }, timer);
            $('.categories__wrapper').animate({
                scrollLeft: $('.categories__wrapper').scrollLeft() + $(this).offset().left - 24
            }, 500);
            const prevActive = $('.categories__item--active')
            setTimeout(() => {
                prevActive.removeClass('transition')
            }, 500);
            categories.not(this).removeClass('categories__item--active')
            $(this).addClass('categories__item--active').addClass('transition')
            changeClasses($(this))
        })
        function changeClasses(active) {
            categories.not(active).removeClass('prev').removeClass('next')
            const nextItems = active.nextAll()
            const prevItems = active.prevAll()
            if (prevItems) {
                prevItems.addClass('prev')
            }
            if (nextItems) {
                nextItems.addClass('next')
            }
        }

    }
}