<?php

class DB
{
	private static $host = null;
	private static $user = null;
	private static $pass = null;
	private static $dbname = null;
	private static $pdo = null;
	
	public static function setup($user, $pass, $host = "localhost", $dbname = "webstift")
	{
		static::$host   = $host;
		static::$user   = $user;
		static::$pass   = $pass;
		static::$dbname = $dbname;
	}
	
	public static function select(
		$table, $where = null, $cols = "*", $orderBy = null, $limit = null
	) {
		$query = 
			"SELECT " . $cols . "
				FROM " . $table . "
				" . ($where !== null ? "WHERE " . $where : "") . "
				" . ($orderBy !== null ? "ORDER BY " . $orderBy : "") . "
				" . ($limit !== null ? "LIMIT " . $limit : "");
				
		$res = static::getPdo()->query($query);
		
		if($res === false) {
			return null;
		}
		
		$res = $res->fetch(PDO::FETCH_OBJ);
		
		if($res === false) {
			return null;
		}
		
		return $res;
	}
	
	public static function selectAll(
		$table, $where = null, $cols = "*", $orderBy = null, $limit = null
	) {
		$res   = static::getPdo()->query(
			"SELECT " . $cols . "
				FROM " . $table . "
				" . ($where !== null ? "WHERE " . $where : "") . "
				" . ($orderBy !== null ? "ORDER BY " . $orderBy : "") . "
				" . ($limit !== null ? "LIMIT " . $limit : "")
		);
		
		if($res === false) {
			return [];
		}
		
		$res = $res->fetchAll(PDO::FETCH_OBJ);
		
		if($res === false) {
			return [];
		}
		
		return $res;
	}
	
	public static function insert($table, $obj)
	{
		$obj  = is_object($obj) ? (array)$obj : $obj;
		$keys = [];
		$vals = [];
		
		foreach($obj as $key => $val) {
			$keys[] = $key;
			$vals[] = "'" . $val . "'";
		}
		
		$res = static::getPdo()->exec(
			"INSERT INTO " . $table . " (" . implode(",", $keys) . ")
				VALUES (" . implode(",", $vals) . ")"
		);
		
		if($res === false) {
			throw new Exception("Could not insert row into table $table");
		}
	}
	
	public static function createTable($table, $cols, $error = true)
	{
		$res = static::getPdo()->exec("CREATE TABLE " . $table . " (" . $cols . ")");
		
		if($res === false && $error) {
			throw new Exception("Could not create table $table");
		}
	}
	
	public static function dropTable($table, $error = true)
	{
		$res = static::getPdo()->exec("DROP TABLE " . $table);
		
		if($res === false && $error) {
			throw new Exception("Could not drop table $table");
		}
	}
	
	private static function getPdo()
	{
		if(static::$pdo === null) {
			if(static::$host === null || static::$user === null || static::$pass === null ||
				static::$dbname === null
			) {
				throw new Exception("DB is not set up yet. Call DB::setup() !");
			}
			else {
				try {
					static::$pdo = new PDO(
						"mysql:host=" . static::$host . ";dbname=" . static::$dbname,
						static::$user, static::$pass
					);
				}
				catch(PDOException $e) {
					throw new Exception("Cannot connect to DB.");
				}
			}
		}
		
		return static::$pdo;
	}
}
