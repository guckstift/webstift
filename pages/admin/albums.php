<?php

if(!Backend::init()) {
	Webstift::redirect(ROOT_URL . "/admin/login");
}

$albums = DB::selectAll("album");

foreach($albums as $album) {
	$album->images = DB::selectAll("image", "album_id = " . $album->id);
}

Webstift::smartyAssign("albums", $albums);

