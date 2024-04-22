export function initPagination() {
    $('[data-pages]').each(function () {
        const parent = $(this)
        const paginationNumbers = $('.pagination ul', parent)
        const paginatedList = $('.grid-links', parent)
        const nextButton = $('.pagination__button--next', parent)
        const prevButton = $('.pagination__button--prev', parent)
        const listItems = $('[data-card]', parent)
        const bg = $('.pagination__bg', parent)
        const paginationLimit = 2;
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage = 1;

        const disableButton = (button) => {
            button.addClass("disabled");
            button.attr("disabled", true);
        };

        const enableButton = (button) => {
            button.removeClass("disabled");
            button.attr("disabled", false);
        };

        const handlePageButtonsStatus = () => {
            if (currentPage === 1) {
                disableButton(prevButton);
            } else {
                enableButton(prevButton);
            }

            if (pageCount === currentPage) {
                disableButton(nextButton);
            } else {
                enableButton(nextButton);
            }
        };


        const appendPageNumber = (index) => {
            const pageNumber = $(`<li class="pagination-number"><button arial-label="Page-${index}" page-index="${index}"><span>${index}</span><span>${index + 1}</span></button></li>`)
            if (index === 1) {
                pageNumber.addClass('active')
            }
            paginationNumbers.append(pageNumber);
        };

        const getPaginationNumbers = () => {
            for (let i = 1; i <= pageCount; i++) {
                if (i < 6 ) {
                    appendPageNumber(i);
                }
                if (i >= 6 && i === pageCount) {
                    paginationNumbers.append('<li>...</li>');
                    appendPageNumber(i);
                }
            }
        };
        const rebuildPagination = (pageIndex) => {
            $('.pagination-number', parent).each(function () {
                if ($(this)[0] !== $('.pagination-number', parent).last()[0]) {
                    const btn = $('button', this)
                    const btnIndex = +btn.attr('page-index')
                    $(this).addClass('rebuild')
                    setTimeout(() => {
                        $(this).removeClass('rebuild')
                        btn.attr('page-index', btnIndex + 1)
                        btn.html(`<span>${btnIndex + 1}</span><span>${btnIndex + 1}</span>`)
                    }, 200);
                    setTimeout(() => {
                        btn.html(`<span>${btnIndex + 1}</span><span>${btnIndex + 2}</span>`)
                    }, 250);
                }
            })
        }
        const setCurrentPage = (pageNum) => {
            const item = $('.pagination .pagination-number', this)
            currentPage = pageNum;

            handlePageButtonsStatus();

            const prevRange = (pageNum - 1) * paginationLimit;
            const currRange = pageNum * paginationLimit;

            listItems.each((item, index) => {
                $(this).addClass("hidden");
                if (index >= prevRange && index < currRange) {
                    $(this).remove("hidden");
                }
            });
        };

        getPaginationNumbers();
        setCurrentPage(1);

        prevButton.on("click", () => {
            setCurrentPage(currentPage - 1);
        });

        nextButton.on("click", () => {
            setCurrentPage(currentPage + 1);
            if (currentPage + 1 !== pageCount) {
                rebuildPagination(currentPage)
            }
        });
        paginationAnimation(this)

        function paginationAnimation(parent) {
            const item = $('.pagination .pagination-number', this)
            item.first().addClass('active')
            item.on('click', function () {
                const pageIndex = Number($('button', this).attr("page-index"));
                bg.css('left', $(this).position().left + 4 + 'px')
                item.not(this).removeClass('active')
                $(this).addClass('active')
                setCurrentPage(pageIndex);

            })
        }
    })
}


