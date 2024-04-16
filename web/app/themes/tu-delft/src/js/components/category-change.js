export function changeCategory() {
    if($('.cards-with-categories__categories').length > 0) {
        const categories = $('.categories__item')
        changeClasses($('.categories__item--active'))
        categories.on('click', function() {
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