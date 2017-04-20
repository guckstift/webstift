
function imgup(action)
{
	var $fileinput = $("<input>")
		.attr("name", "imgfile[]")
		.attr("type", "file")
		.attr("multiple", "true")
		.change(function () {
			$form.submit();
		});
	var $form = $("<form>")
		.attr("method", "post")
		.attr("enctype", "multipart/form-data")
		.attr("action", action)
		.append($fileinput)
		.hide()
		.appendTo("body");
	
	$fileinput.click();
	event.preventDefault();
}
