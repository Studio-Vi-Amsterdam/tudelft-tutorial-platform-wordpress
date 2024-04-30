import ModalWindowBase from './ModalWindowBase';

export default class ModalVideoWindow extends ModalWindowBase {
  constructor() {
    super();
    this.constants = {
      ...this.constants,
      MODAL_VIDEO_ID: 'modal-video',
      MODAL_CALLERS: [
        {
          callerSelector: '[data-video-src]',
          handlerFunction: this.callModalVideoHandler.bind(this),
        },
      ],
      MODAL_CALL_VIDEO_SELECTORS: '',
    }
    this.$modalVideo = document.getElementById(this.constants.MODAL_VIDEO_ID)
  }

  callModalVideoHandler(target) {
    const dataVideoSrc = target.dataset.videoSrc
    const dataImageSrc = target.dataset.imageSrc
    if(dataVideoSrc) {
      const url = new URL(dataVideoSrc);
      url.searchParams.set('autoplay', '1');
      this.$modalVideo.querySelector('iframe')
        .setAttribute('src', url)
        this.$modalVideo.classList.add('show-video')

    }
    this.openModal(this.constants.MODAL_VIDEO_ID)
  }

  closeModal(event) {
    setTimeout(() => {
      this.$modal.querySelector(`#${this.constants.MODAL_VIDEO_ID}`)
        .querySelector('iframe')
        .setAttribute('src', '')
      this.$modalVideo.classList.remove('show-video')
    }, 500);
    super.closeModal(event)

  }
}
