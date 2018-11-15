<?php
$server = 'mysql';
$username = 'sonjoaquin';
$password = 'secret';
$database = 'test';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}