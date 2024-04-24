import ModalWindowBase from './ModalWindowBase';

export default class ModalVideoWindow extends ModalWindowBase {
  constructor() {
    super();
    this.constants = {
      ...this.constants,
      MODAL_VIDEO_ID: 'modal-video',
      MODAL_CALLERS: [
        {
          callerSelector: '[data-video-src], [data-image-src]',
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
      this.$modalVideo.classList.add('show-video')
      const url = new URL(dataVideoSrc);
      url.searchParams.set('autoplay', '1');
      this.$modalVideo.querySelector('iframe')
        .setAttribute('src', url)

    }
    if(dataImageSrc) {
      this.$modalVideo.classList.add('show-image')
      this.$modalVideo.querySelector('img')
        .setAttribute('src', dataImageSrc)

    }
    this.openModal(this.constants.MODAL_VIDEO_ID)
  }

  closeModal(event) {
    setTimeout(() => {
      this.$modal.querySelector(`#${this.constants.MODAL_VIDEO_ID}`)
        .querySelector('iframe')
        .setAttribute('src', '')
        this.$modalVideo.querySelector('img')
          .setAttribute('src', '')
      this.$modalVideo.classList.remove('show-image')
      this.$modalVideo.classList.remove('show-video')
    }, 500);
    super.closeModal(event)

  }
}
