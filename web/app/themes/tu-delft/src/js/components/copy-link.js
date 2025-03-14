export function copyLink() {
	const $temp = $("<input>");

	const authorized = !!document.body.getAttribute("data-authorized");

	if (!authorized) {
		$(".tutorial__item h4").each((i, el) => {
			$(el).html($(el).html() + "<span>link copied</span>");
		});

		// $(".tutorial__item h3").each((i, el) => {
		// 	$(el).html($(el).html() + "<span>link copied</span>");
		// });

		// $(".tutorial__item h3").on("click", function () {
		// 	let $url = window.location.href;
		// 	if (window.location.hash.length) {
		// 		window.location.hash = "";
		// 		$url = window.location.href;
		// 		$url.replace("#", "");
		// 	}
		// 	if (window.location.hash.length) {
		// 		$url = $url.substring(0, $url.indexOf("#"));
		// 	} else {
		// 		$url += "#" + $(this).attr("id");
		// 	}
		// 	$("body").append($temp);
		// 	$temp.val($url).select();
		// 	document.execCommand("copy");
		// 	$temp.remove();
		// 	$(this).addClass("copied");
		// 	setTimeout(() => {
		// 		$(this).removeClass("copied");
		// 	}, 2000);
		// });

		$(".tutorial__item h4").on("click", function () {
			let $url = window.location.href;
			if (window.location.hash.length) {
				window.location.hash = "";
				$url = window.location.href;
				$url.replace("#", "");
			}
			if (window.location.hash.length) {
				$url = $url.substring(0, $url.indexOf("#"));
			} else {
				$url += "#" + $(this).attr("id");
			}
			$("body").append($temp);
			$temp.val($url).select();
			document.execCommand("copy");
			$temp.remove();
			$(this).addClass("copied");
			setTimeout(() => {
				$(this).removeClass("copied");
			}, 2000);
		});
	}

	$(".tutorialLinkCopySelector").on("click", function () {
		window.location.hash = "";
		let $url = window.location.href;
		if ($(this).closest('h3, h4').hasAttribute('id')) {
			$url += "#" + $(this).closest('h3, h4').attr("id");
		}
		$("body").append($temp);
		$temp.val($url).select();
		document.execCommand("copy");
		$temp.remove();
		$(this).prop("disabled", true);
		$(this).find(".copy-checked")?.addClass("copy-checked--active");
		setTimeout(() => {
			$(this).find(".copy-checked").removeClass("copy-checked--active");
			$(this).prop("disabled", false);
		}, 2000);
	});
}
