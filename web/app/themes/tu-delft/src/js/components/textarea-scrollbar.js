export function textareaScrollBar() {
    const field = $('.field--textarea textarea')
    const text = $('.field--textarea span')
    field.on('input', function(e) {
        text.text($(this).val())
        field.css('height', text.outerHeight() + 80 + 'px')
    })
}