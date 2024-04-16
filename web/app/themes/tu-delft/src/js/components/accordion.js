export function accordion() {
    const firstItem = $('.accordion__head').first()
    firstItem.addClass('opened')
    firstItem.next('.accordion__content').css('overflow', 'unset').css('pointer-events', 'all')
    $('.accordion__head').on('click', function() {
        // $('.accordion__head').not(this).removeClass('opened')
        $(this).next('.accordion__content').css('overflow', 'hidden').css('pointer-events', 'none')
        $(this).toggleClass('opened')
        setTimeout(() => {
            if($(this).hasClass('opened')) {
                $(this).next('.accordion__content').css({
                    'overflow' : 'unset',
                    'pointer-events' : 'all',
                 })
            }
        }, 750);
    })
}