export function openDropdown() {
    $('[data-dropdown-open]').on('click', function() {
        $(this).parent().toggleClass('opened')
    })
    $('.field__dropdown-item').on('click', function() {
        const parent = $(this).closest('[data-dropdown]')
        parent.removeClass('opened')
        $('[data-dropdown-open] span', parent).text($('label', this).text())
    })
}