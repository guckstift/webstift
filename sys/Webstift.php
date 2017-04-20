<?php

class Webstift
{
	private static $less = null;
	private static $smarty = null;
	
	public static function printStyle($style)
	{
		$lessFile = ROOT_PATH . "/styles/" . $style . ".less";
		$cssFile  = ROOT_PATH . "/styles/" . $style . ".css";
		static::getLess()->checkedCompile($lessFile, $cssFile);
		header("Content-Type: text/css");
		echo file_get_contents($cssFile);
	}
	
	public static function printPage($page)
	{
		if(is_dir(ROOT_PATH . "/pages/" . $page)) {
			$page .= "/index";
		}
	
		$pageFile = ROOT_PATH . "/pages/" . $page . ".tpl";
		$phpFile  = ROOT_PATH . "/pages/" . $page . ".php";
		
		if(!is_file($pageFile) && !is_file($phpFile)) {
			$pageFile = ROOT_PATH . "/pages/notfound.tpl";
			$phpFile  = ROOT_PATH . "/pages/notfound.php";
		}
	
		if(is_file($phpFile)) {
			require_once $phpFile;
		}
	
		if(is_file($pageFile)) {
			static::getSmarty()->display($pageFile);
		}
	}
	
	public static function printIndex()
	{
		static::printPage("index");
	}
	
	public static function smartyAssign($name, $value)
	{
		static::getSmarty()->assign($name, $value);
	}
	
	public static function installDB()
	{
		DB::dropTable("user", false);
		DB::createTable("user", "name VARCHAR(255), pass VARCHAR(255)");
		DB::insert("user", [
			"name" => "root", "pass" => password_hash("pass", PASSWORD_DEFAULT)
		]);

		DB::dropTable("album", false);
		DB::createTable("album", "id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255)");
		DB::insert("album", ["name" => "Demo-Album"]);
		DB::insert("album", ["name" => "Empty-Album"]);
		
		DB::dropTable("image", false);
		DB::createTable("image", "album_id INT, name VARCHAR(255), url VARCHAR(255)");
		DB::insert("image", [
			"album_id" => 1, "name" => "Forest-Image", "url" => ROOT_URL . "/media/forest-lg.jpg"
		]);
	}
	
	public static function redirect($url)
	{
		header('Location: ' . $url);
		exit();
	}
	
	public static function getIntArg($name)
	{
		return isset($_REQUEST[$name]) ? (int)$_REQUEST[$name] : null;
	}
	
	public static function getStringArg($name)
	{
		return isset($_REQUEST[$name]) ? $_REQUEST[$name] : null;
	}
	
	public static function getBoolArg($name)
	{
		return isset($_REQUEST[$name]) ? (bool)$_REQUEST[$name] : null;
	}
	
	private static function getLess()
	{
		if(static::$less === null) {
			$less = new lessc;
		}
		
		return $less;
	}
	
	private static function getSmarty()
	{
		if(static::$smarty === null) {
			static::$smarty = new Smarty();
			static::$smarty->setTemplateDir([
				ROOT_PATH . "/templates",
				ROOT_PATH . "/pages",
			]);
			static::$smarty->setCompileDir(ROOT_PATH . "/sys/templates_c");
			static::smartyAssign("rootUrl", ROOT_URL);
		}
		
		return static::$smarty;
	}
}
