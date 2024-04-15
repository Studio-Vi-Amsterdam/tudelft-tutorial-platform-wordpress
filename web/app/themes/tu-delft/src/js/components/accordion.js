export function accordion() {
    $('.accordion__head').on('click', function() {
        $('.accordion__head').not(this).removeClass('opened')
        $('.accordion__head').next('.accordion__content').css('overflow', 'hidden').css('pointer-events', 'none')
        $(this).toggleClass('opened')
        if($(this).hasClass('opened')) {
            setTimeout(() => {
                $(this).next('.accordion__content').css({
                    'overflow' : 'unset',
                    'pointer-events' : 'all',
                 })
            }, 750);
        }
    })
}