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

		$(".tutorial__item h4, .tutorial__item h3").on("click", function () {
			let $url = window.location.href;
			if (window.location.hash.length) {
				window.location.hash = "";
				$url = window.location.href;
				$url.replace("#", "");
			}
			if (window.location.hash.length) {
				$url = $url.substring(0, $url.indexOf("#"));
			} else if ($(this).attr("id")) {
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

	$(".tutorialLinkCopySelector").on("click", function (e) {
		e.preventDefault();
		window.location.hash = "";
		let $url = window.location.href;
		const thisEl = $(this);
		if (thisEl.closest('h3, h4').is('[id]')) {
			$url += "#" + thisEl.closest('h3, h4').attr("id");
		}
		if(thisEl.closest('.tutorial__subchapter-title')) {
			$url += "#" + thisEl.closest('.tutorial__subchapter-title').find("h3, h4").attr('id')
		}
		$("body").append($temp);
		$temp.val($url).select();
		document.execCommand("copy");
		$temp.remove();
		thisEl.prop("disabled", true);
		thisEl.find(".copy-checked")?.addClass("copy-checked--active");
		setTimeout(() => {
			thisEl.find(".copy-checked").removeClass("copy-checked--active");
			thisEl.prop("disabled", false);
		}, 2000);
	});
	$('.citation__box').on('click', function () {
  const text = $(this).data('copy');

  const $input = $('<input>');
  $('body').append($input);
  $input.val(text).select();
  document.execCommand('copy');
  $input.remove();

  $(this).addClass('copied');
  setTimeout(() => $(this).removeClass('copied'), 1500);
});

}
