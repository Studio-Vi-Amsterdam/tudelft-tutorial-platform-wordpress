export function showSearchBar() {
    const seachBar= $('[data-search]')
    const openSearch = $('[data-open-search]')
    const closeSearch = $('[data-close-search]')
    const header = $('.header')
    openSearch.on('click', function() {
        seachBar.toggleClass('opened')
        $(this).parent().next().children().focus()
        if($(window).innerWidth() < 1024) {
            header.toggleClass('open-search')
        }
     })
     closeSearch.on('click', function() {
         seachBar.removeClass('opened')
         header.removeClass('open-search')
      })
     $(window).on('click', function(e) {
        if(!e.target.closest('[data-search]')) {
            seachBar.removeClass('opened')
            header.removeClass('open-search')
        }
     })
}