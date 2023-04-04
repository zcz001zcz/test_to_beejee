<?php
$dbhost = 'localhost';
$dbname = 'testwork';
$dbuser = 'root';
$dbpass = '160121';

function db_connect() {
	global $dbhost, $dbname, $dbuser, $dbpass;
	$connect = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	return $connect;
}

function db_close() {
	$connect = null;
}