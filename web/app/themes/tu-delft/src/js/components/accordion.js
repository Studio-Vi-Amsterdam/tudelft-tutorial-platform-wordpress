export function accordion() {
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