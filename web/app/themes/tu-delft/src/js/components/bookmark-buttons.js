export const bookmarkButtons = async () => {

    const setBookmarkButtons = document.querySelectorAll('.setBookmarked')

    if (setBookmarkButtons) {
        setBookmarkButtons.forEach(bookmarkedButton => {
            bookmarkedButton.addEventListener("click", (e) => {
                const dataAttr = bookmarkedButton.dataset.bookmarked
                if (dataAttr === "true") {
                    // ajax request to remove bookmark
                    $.ajax({
                        url: ajax_url,
                        type: 'POST',
                        data: {
                            action: 'remove_bookmark',
                            post_id: bookmarkedButton.dataset.postid
                        },
                        success: function (response) {
                            bookmarkedButton.setAttribute("data-bookmarked", "false")
                        }
                    });
                } else {
                    // ajax request to add bookmark
                    $.ajax({
                        url: ajax_url,
                        type: 'POST',
                        data: {
                            action: 'add_bookmark',
                            post_id: bookmarkedButton.dataset.postid
                        },
                        success: function (response) {
                            bookmarkedButton.setAttribute("data-bookmarked", "true")
                        }
                    });
                }
            })
        })
    }

    const bookmarkedButtons = document.querySelectorAll('.bookmark-button')

    if (bookmarkedButtons) {
        bookmarkedButtons.forEach(bookmarkedButton => {
            bookmarkedButton.addEventListener("click", (e) => {
                const dataAttr = bookmarkedButton.dataset.bookmarked
                const post = bookmarkedButton.closest('article')
                const postId = parseInt(bookmarkedButton.dataset?.postid) ?? null
                console.log(post?.dataset?.postid);
                const self = this
                if (dataAttr === "true") {
                    $.ajax({
                        url: ajax_url,
                        type: 'POST',
                        data: {
                            action: 'remove_bookmark',
                            post_id: postId
                        },
                        success: function (response) {
                            bookmarkedButton.setAttribute("data-bookmarked", "false")
                            // Uncomment to remove the post from the DOM
                            // $(post).remove()
                        }
                    });

                } else {
                    $.ajax({
                        url: ajax_url,
                        type: 'POST',
                        data: {
                            action: 'add_bookmark',
                            post_id: postId
                        },
                        success: function (response) {
                            bookmarkedButton.setAttribute("data-bookmarked", "true")
                        }
                    });
                }
            })
        });
    }
}

