export function initPagination() {
    $('[data-pages]').each(function () {
        const parent = $(this)
        const pagination = $('.pagination', parent)
        const paginationNumbers = $('.pagination ul', parent)
        const paginatedList = $('.grid-links', parent)
        const nextButton = $('.pagination__button--next', parent)
        const prevButton = $('.pagination__button--prev', parent)
        const listItems = $('[data-card]', parent)
        const bg = $('.pagination__bg', parent)
        const paginationLimit = parent.attr('data-pages');
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage = 1;
        if(pageCount <= 1) {
            pagination.addClass('hidden')
        }

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
            if (index === pageCount) {
                pageNumber.addClass('last')
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
        const rebuildPagination = (pageIndex, direction) => {
            $('.pagination-number', parent).each(function () {
                if ($(this)[0] !== $('.pagination-number', parent).last()[0]) {
                    const btn = $('button', this)
                    const btnIndex = +btn.attr('page-index')
                    if(direction === 'next') {
                        btn.html(`<span>${btnIndex}</span><span>${btnIndex + 1}</span>`)
                        setTimeout(() => {
                            $(this).addClass('rebuild')
                        }, 50);
                        setTimeout(() => {
                            $(this).removeClass('rebuild')
                            btn.attr('page-index', btnIndex + 1)
                            btn.html(`<span>${btnIndex + 1}</span><span>${btnIndex + 1}</span>`)
                        }, 200);
                        setTimeout(() => {
                            btn.html(`<span>${btnIndex + 1}</span><span>${btnIndex + 2}</span>`)
                        }, 250);
                    } else {
                        btn.html(`<span>${btnIndex}</span><span>${btnIndex - 1}</span>`)
                        setTimeout(() => {
                            $(this).addClass('rebuild')
                        }, 50);
                        setTimeout(() => {
                            $(this).removeClass('rebuild')
                            btn.attr('page-index', btnIndex - 1)
                            btn.html(`<span>${btnIndex - 1}</span><span>${btnIndex - 1}</span>`)
                        }, 200);
                        setTimeout(() => {
                            btn.html(`<span>${btnIndex - 1}</span><span>${btnIndex - 2}</span>`)
                        }, 250);
                    }
                }
            })
        }
        const setCurrentPage = (pageNum) => {
            currentPage = pageNum;

            handlePageButtonsStatus();

            const prevRange = (currentPage - 1) * paginationLimit;
            const currRange = currentPage * paginationLimit;

            listItems.each(function(item, index) {
                if (item >= prevRange && item < currRange) {
                    $(this).removeClass("hidden");
                } else if (item < prevRange || item >= currRange)  {
                    $(this).addClass("hidden");

                }
            });
        };

        getPaginationNumbers();
        setCurrentPage(1);

        prevButton.on("click", () => {
            if(currentPage - 1 >= 1) {
                setCurrentPage(currentPage - 1);
            }
            if(currentPage  >= 1 && $(`[page-index="${currentPage}"]`, parent).length > 0) {
                const item = $(`[page-index="${currentPage}"]`, parent).parent()
                $('.pagination .pagination-number', parent).removeClass('active')
                item.addClass('active')
                bg.css('left', item.position().left + 4 + 'px')
            } else if (currentPage  >= 1) {
                rebuildPagination(currentPage, 'prev')
            }
        });

        nextButton.on("click", () => {
            if(currentPage + 1 <= pageCount) {
                setCurrentPage(currentPage + 1);
            }
            if(currentPage- 1 <= pageCount && $(`[page-index="${currentPage}"]`, parent).length > 0) {
                const item = $(`[page-index="${currentPage}"]`, parent).parent()
                $('.pagination .pagination-number', parent).removeClass('active')
                item.addClass('active')
                bg.css('left', item.position().left + 4 + 'px')
            } else if (currentPage - 1 <= pageCount) {
                rebuildPagination(currentPage, 'next')
            }
        });
        paginationAnimation(this)
        $('.last').on('click', function() {
            const pageIndex = Number($('button', this).attr("page-index"));
            setCurrentPage(pageIndex);
            const item = $('.pagination .pagination-number', parent)
            item.each(function(i, index) {
                const btn = $('button', this)
                btn.attr('page-index', pageCount - item.length + 1 + i)
                btn.html(`<span>${pageCount - item.length + 1  + i}</span><span>${pageCount + item.length + 2  - 5 + i}</span>`)
    
            })
    
        })

        function paginationAnimation(parent) {
            const item = $('.pagination .pagination-number', parent)
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


