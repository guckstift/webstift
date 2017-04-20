<?php

if(!Backend::init()) {
	Webstift::redirect(ROOT_URL . "/admin/login");
}

if(isset($_REQUEST["action"]) && $_REQUEST["action"] === "installdb") {
	Webstift::installDB();
}

