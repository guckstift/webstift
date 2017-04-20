<?php

define("ROOT_PATH", __DIR__);
define(
	"ROOT_URL",
	(empty($_SERVER["HTTPS"]) ? "http" : "https") . "://" . $_SERVER["HTTP_HOST"] .
		dirname($_SERVER["PHP_SELF"])
);

require_once ROOT_PATH . "/sys/libs/smarty/libs/Smarty.class.php";
require_once ROOT_PATH . "/sys/libs/lessphp/lessc.inc.php";
require_once ROOT_PATH . "/config.php";

main();

function main()
{
	spl_autoload_register("autoload");
	DB::setup(DB_USER, DB_PASS, DB_HOST, DB_NAME);
	
	if(isset($_GET["style"])) {
		Webstift::printStyle($_GET["style"]);
	}
	elseif(isset($_GET["page"])) {
		Webstift::printPage($_GET["page"]);
	}
	else {
		Webstift::printIndex();
	}
}

function dumpdie($val)
{
	var_dump($val);
	die();
}

function autoload($class)
{
	require_once ROOT_PATH . "/sys/" . $class . ".php";
}
