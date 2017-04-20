
function initStiftbox()
{
	var $stiftboxShowImg = $("<img>")
		.addClass("stiftbox-show-img")
	;
	var $stiftboxShow    = $("<div>")
		.addClass("stiftbox-show")
		.append(
			$("<a href='#'>")
				.attr("href", "#")
				.css("height", "100%")
				.css("display", "block")
				.click(function () {
					$stiftboxShow.fadeOut();
					event.preventDefault();
				})
				.append($stiftboxShowImg)
		)
		.hide()
		.appendTo("body")
	;
	
	$(".stiftbox-img")
		.each(function (i, img) {
			var $img = $(img);
			$img.wrap(
				$("<a>")
					.attr("href", "#")
					.click(function (e) {
						var src = $(e.target).data("src") || e.target.src;
						console.log($(e.target));
						$stiftboxShowImg.attr("src", src)
						$stiftboxShow.fadeIn();
						event.preventDefault();
					})
			);
		})
	;
}

$(initStiftbox);
