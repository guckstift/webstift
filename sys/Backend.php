<?php

class Backend
{
	private static $initialized = false;
	private static $logged = false;
	
	public static function init()
	{
		if(static::$initialized === false) {
			session_start();
			static::$logged = isset($_SESSION["user"]);
			static::$initialized = true;
		}
		
		Webstift::smartyAssign("logged", static::$logged);
		
		return static::$logged;
	}
	
	public static function login($user, $pass)
	{
		$dbres = DB::select("user", "name = '" . $user . "'");
		
		if($dbres !== null) {
			if(password_verify($pass, $dbres->pass)) {
				$_SESSION["user"] = $user;
				static::$logged = true;
				return true;
			}
		}
		
		return false;
	}
	
	public static function logout()
	{
		static::$logged = false;
		unset($_SESSION["user"]);
	}
}
