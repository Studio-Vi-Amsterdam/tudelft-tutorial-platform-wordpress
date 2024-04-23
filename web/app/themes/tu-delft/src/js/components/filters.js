export function openFilter() {
    const inputs = $('[data-filter] .filter__checkbox input')
    $(window).on('click', function(e) {
        if($(e.target).closest('.filter').length === 0 || $(e.target).closest('.filter__close').length > 0) {
            $('.filter').removeClass('filter--opened')
        }
    })
    $('.filter__head').on('click', function(e) {
        $('.filter').not($(this).parent()).removeClass('filter--opened')
        $(this).parent().toggleClass('filter--opened')
    })
    $('[data-sort] a').on('click', function(e) {
        const parent = $(this).closest('.filter')
        e.preventDefault()
        $('.filter__head span', parent).text($(this).text())
    })
    inputs.on('change', function(e) {
        let array = []
        inputs.each(function() {
            if($(this).is(":checked")) {
                array.push($(this).attr('name'))
            }
        })
        const unique = [... new Set(array)]
        $('[data-filter] .filter__head sup').text(unique.length)
    })
}