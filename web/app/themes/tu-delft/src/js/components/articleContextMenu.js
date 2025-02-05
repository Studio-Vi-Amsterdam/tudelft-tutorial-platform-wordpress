export const initArticleContextMenu = async () => {
    const menus = document.querySelectorAll('.tutorial__menu-trigger')

    if (menus) {
        menus.forEach(menu => {
            menu.addEventListener('click', () => {
                const dataAttr = menu.dataset.opened
                if (dataAttr === "true") {
                    menu.setAttribute("data-opened", "false")
                } else {
                    menu.setAttribute("data-opened", "true")
                }
            })
        })

    }


    const suggestionModal = document.querySelector('.modal-suggestion__inner');
    const secondSuggestionModal = document.querySelector('.modal-suggestion__second')
    if (suggestionModal && secondSuggestionModal) {
        const submitButton = suggestionModal.querySelector('.modal-suggestion__submit-button');
        
        if (submitButton) {
            submitButton.addEventListener('click', () => {
                const userSuggestionMsg = suggestionModal.querySelector('#user-suggestion-field')?.value
                submitButton.setAttribute("disabled", "true");

                // instead of request now
                setTimeout(() => {
                    submitButton.removeAttribute("disabled");
                    suggestionModal.classList.add("modal-suggestion__inner--hidden");
                    secondSuggestionModal.classList.remove("modal-suggestion__second--hidden")

                }, 500)

            })
        }
    }
}