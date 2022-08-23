<?php
function db():PDO 
{
	static $pdo;

	if(!$pdo){
		return new PDO(
			sprintf("mysql:host=%s;dbname=%s;charset=UTF8",DB_HOST,DB_NAME),
			DB_USER,
			DB_PWD,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		);
	}
	return $pdo;
}