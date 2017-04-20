<?php

if(!Backend::init()) {
	Webstift::redirect(ROOT_URL . "/admin/login");
}

$id = Webstift::getIntArg("id");
$action = Webstift::getStringArg("action");

if($id !== null && $id > 0 && ($album = DB::select("album", "id = " . $id)) !== null) {
	if($action === "imgup") {
		var_dump($_FILES);
	}

	$images = DB::selectAll("image", "album_id = " . $id);
	Webstift::smartyAssign("album", $album);
	Webstift::smartyAssign("images", $images);
}
else {
	Webstift::redirect(ROOT_URL . "/admin/albums");
}
