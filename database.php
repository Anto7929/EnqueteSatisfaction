<?php
	define('DSN', 'mysql:host=localhost;port=3306;dbname=pereza');
	define('login', 'pereza');
	define('password', 'EeThung3je');
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, 
			PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
?>

