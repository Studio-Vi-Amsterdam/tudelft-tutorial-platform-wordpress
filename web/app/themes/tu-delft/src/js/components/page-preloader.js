export function pagePreloader() {
    if(!$('.preloader').hasClass('loaded-page')) {
        $(window).on('load', function() {
            setTimeout(() => {
                $('.preloader').addClass('loaded').addClass('loaded-page')
            }, 1380);
            setTimeout(() => {
                $('.preloader').removeClass('loaded')
            }, 2130);
        })
    }
   
}