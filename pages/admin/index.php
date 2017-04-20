<?php

if(!Backend::init()) {
	Webstift::redirect(ROOT_URL . "/admin/login");
}

