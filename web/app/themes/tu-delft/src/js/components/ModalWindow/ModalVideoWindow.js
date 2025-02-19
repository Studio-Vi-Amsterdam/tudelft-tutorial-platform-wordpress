import ModalWindowBase from "./ModalWindowBase";

export default class ModalVideoWindow extends ModalWindowBase {
	constructor() {
		super();
		this.constants = {
			...this.constants,
			MODAL_VIDEO_ID: "modal-video",
			MODAL_CALLERS: [
				{
					callerSelector: "[data-video-src]",
					handlerFunction: this.callModalVideoHandler.bind(this),
				},
			],
			MODAL_CALL_VIDEO_SELECTORS: "",
		};
		this.$modalVideo = document.getElementById(this.constants.MODAL_VIDEO_ID);
	}

	callModalVideoHandler(target) {
		const placeholderUrl = jQuery(target)
			.children("figure")
			.children(".video__preload")
			.children("img")
			.attr("src");

		const dataVideoSrc = target.dataset.videoSrc;
		const dataVideoId = target.dataset.videoid;
		const dataPageId = target.dataset.pageid;
		const dataVideoSubtitle = target.dataset.videoSubtitles;
		const type = dataVideoSrc.split(".")[dataVideoSrc.split(".").length - 1];
		if (dataVideoSrc && dataVideoSubtitle) {
			this.$modalVideo.querySelector(
				".modal-video-item__wr-iframe",
			).innerHTML += `
      <video id="video" crossorigin="anonymous" loop autoplay controls>
                <source src='${dataVideoSrc}' type='video/${type}'>
                <track id="track" src="${dataVideoSubtitle}" kind="subtitles" srclang="en" label="Nightmare" default />
                </video>
                `;
		} else if (dataVideoSrc) {
			this.$modalVideo.querySelector(
				".modal-video-item__wr-iframe",
			).innerHTML += `
      <video id="video" crossorigin="anonymous" loop autoplay controls>
                <source src='${dataVideoSrc}' type='video/${type}'>
                </video>
                `;
		}
		this.$modalVideo.classList.add("show-video");
		this.openModal(this.constants.MODAL_VIDEO_ID);

		$.ajax({
			url: ajax_url,
			type: "POST",
			data: {
				action: "add_watched_video",
				pageId: dataPageId,
				videoId: dataVideoId,
				pageUrl: window.location.href,
				placeholderUrl: placeholderUrl,
			},
			success: function (response) {
				console.log(response);
			},
		});
	}

	closeModal(event) {
		setTimeout(() => {
			document.querySelector(".modal-video-item__wr-iframe video").remove();
			this.$modalVideo.classList.remove("show-video");
		}, 500);
		super.closeModal(event);
	}
}
