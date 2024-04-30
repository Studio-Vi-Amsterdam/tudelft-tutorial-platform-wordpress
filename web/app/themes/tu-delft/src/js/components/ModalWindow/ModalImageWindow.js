import ModalWindowBase from './ModalWindowBase';

export default class ModalImageWindow extends ModalWindowBase {
  constructor() {
    super();
    this.constants = {
      ...this.constants,
      MODAL_IMAGE_ID: 'modal-image',
      MODAL_CALLERS: [
        {
          callerSelector: '[data-image-src]',
          handlerFunction: this.callModalImageHandler.bind(this),
        },
      ],
      MODAL_CALL_IMAGE_SELECTORS: '',
    }
    this.$modalImage = document.getElementById(this.constants.MODAL_IMAGE_ID)
  }

  callModalImageHandler(target) {
    const dataImageSrc = target.dataset.imageSrc
    if(dataImageSrc) {
      this.$modalImage.querySelector('img')
        .setAttribute('src', dataImageSrc)
        this.$modalImage.classList.add('show-image')
    }
    this.openModal(this.constants.MODAL_IMAGE_ID)
  }

  closeModal(event) {
    setTimeout(() => {
        this.$modalImage.querySelector('img')
          .setAttribute('src', '')
      this.$modalImage.classList.remove('show-image')
    }, 500);
    super.closeModal(event)

  }
}
