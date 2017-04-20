<?php

if(Backend::init()) {
	Backend::logout();
	Webstift::redirect(ROOT_URL . "/admin/login");
}

