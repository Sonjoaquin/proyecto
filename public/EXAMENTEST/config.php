<?php
session_start();

// Define database
define('dbhost', 'mysql');
define('dbuser', 'sonjoaquin');
define('dbpass', 'secret');
define('dbname', 'prueba');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
