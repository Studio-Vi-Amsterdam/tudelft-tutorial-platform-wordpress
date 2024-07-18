export function zoomImage() {
    $('[data-image-src]').parent()
    .on('mouseover', function(){
      $(this).children('[data-image-src]').css({'transform': 'scale(2)'});
    })
    .on('mouseout', function(){
      $(this).children('[data-image-src]').css({'transform': 'scale(1)'});
    })
    .on('mousemove', function(e){
      $(this).children('[data-image-src]').css({'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +'%'});
    })
}