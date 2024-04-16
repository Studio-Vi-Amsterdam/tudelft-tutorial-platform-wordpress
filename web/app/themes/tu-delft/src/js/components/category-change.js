export function changeCategory() {
    if($('.cards-with-categories__categories').length > 0) {
        const bg = $('.categories__bg')
        const categories = $('.categories__item')
        changeClasses($('.categories__item--active'))
        categories.on('click', function() {
            categories.not(this).removeClass('categories__item--active')
            $(this).addClass('categories__item--active')
            changeClasses($(this))
        })
        function changeClasses(active) {
            bg.each(function() {
                $(this).css('left', active.position().left -  $(this).parent().position().left  + 'px').css('width', active.width() + 'px')
    
            })
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