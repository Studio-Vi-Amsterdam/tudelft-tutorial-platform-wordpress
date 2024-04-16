export function paginationAnimation() {
    const item = $('.pagination li')
    const bg = $('.pagination__bg')
    item.first().addClass('active')
    item.on('click', function() {
        bg.css('left', $(this).position().left + 4 + 'px')
        item.not(this).removeClass('active')
        $(this).addClass('active')

    })
}