<?php

if(Backend::init()) {
	Webstift::redirect(ROOT_URL . "/admin");
}
else {
	if(isset($_REQUEST["user"], $_REQUEST["pass"])) {
		Backend::login($_REQUEST["user"], $_REQUEST["pass"]);
		Webstift::redirect(ROOT_URL . "/admin");
	}
}

