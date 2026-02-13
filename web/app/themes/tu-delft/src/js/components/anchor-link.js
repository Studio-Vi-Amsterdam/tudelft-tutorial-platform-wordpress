export function initAnchorLink() {
	if (document.querySelector('.watched-video-item')) {
		document.querySelectorAll('.watched-video-item').forEach((item) => {
			const videoSrc = item.querySelector('[data-video-src]').dataset.videoSrc
			const urlVideo = new URL(item.querySelector('.watched-video-item__title').href)
			urlVideo.searchParams.set('video', videoSrc)
			item.querySelector('.watched-video-item__title').href = urlVideo.toString()
		})
	}
}
