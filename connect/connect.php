<?php
class Connect
{
	private static $instance;

	public static function getInstance()
	{
		try {
			if(!isset(self::$instance))
			{
				$dsn = "mysql:host=localhost;dbname=livro";
               self::$instance = new PDO($dsn, "root", "",array(
			   	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
			   	));
			}
			return self::$instance;

		} catch (PDOException $e) {
			echo 'Erro '.$e->getMessage();
		}
	}
}

//Connect::getInstance();

