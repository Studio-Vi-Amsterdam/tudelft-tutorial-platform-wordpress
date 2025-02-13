export const initSuggestionModal = () => {
	const modalWindow = document.getElementById("modal-window-suggestion");

	const closeModal = (modal) => {
		setTimeout(() => {
			modal.classList.remove("modal-window-suggestion--active");
		}, 500);
		const modalItem = modal.querySelectorAll(".modal-window__item")[0];
		if (modalItem) {
			modalItem.classList.remove("modal-window__item--active");
		}
	};

	if (modalWindow) {
		const fader = modalWindow.querySelectorAll(".modal-window__fader")[0];

		if (fader) {
			fader.addEventListener("click", () => {
				closeModal(modalWindow);
			});
		}

		const closeButtons = document.querySelectorAll(".modal-window__close-icon");

		if (closeButtons) {
			closeButtons.forEach((closeButton) => {
				closeButton.addEventListener("click", () => {
					closeModal(modalWindow);
				});
			});
		}

		const formCallerButtons = document.querySelectorAll(
			"button[data-suggestion-modal-id='modal-suggestion']",
		);

		if (formCallerButtons) {
			formCallerButtons.forEach((callerButton) => {
				callerButton.addEventListener("click", () => {
					modalWindow.classList.add("modal-window-suggestion--active");
					const modalItem = modalWindow.querySelectorAll(
						".modal-window__item",
					)[0];
					if (modalItem) {
						modalItem.classList.add("modal-window__item--active");
					}
				});
			});
		}
	}
};
