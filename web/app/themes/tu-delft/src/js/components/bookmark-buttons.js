export const bookmarkButtons = async () => {
    const bookmarkedButtons = document.querySelectorAll('.bookmark-button')

    if (bookmarkedButtons) {
        bookmarkedButtons.forEach(bookmarkedButton => {
            bookmarkedButton.addEventListener("click", () => {
                const dataAttr = bookmarkedButton.dataset.bookmarked
                const post = bookmarkedButton.parentElement?.parentElement?.parentElement?.parentElement
                const postId = parseInt(post?.dataset?.id) ?? null
                console.log('postID', postId)
                if (dataAttr === "true") {
                    bookmarkedButton.setAttribute("data-bookmarked", "false")
                    const promise1 = new Promise((resolve, reject) => {
                        setTimeout(() => {
                          if (resolve) {
                            post.remove()
                          }

                        // immitation of request
                        }, 1500);
                      });

                } else {
                    bookmarkedButton.setAttribute("data-bookmarked", "true")
                }
            })
        });
    }
}