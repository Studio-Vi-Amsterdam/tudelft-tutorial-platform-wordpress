export function lazyLoad() {
	jQuery(function ($) {
		$("img.lazy").lazy({
			threshold: 300,
			visibleOnly: true
		});
	})
}
