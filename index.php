<?php
session_start();
if (!isset($_SESSION['adm'])) {
	$inc_file = 'login';
}
else {
	$inc_file = 'admin';
}
require_once "config/conf.php";

$dir = dirname($_SERVER['SCRIPT_NAME']);

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} 
else {
	$action = "main";
}

require_once "model/".$action.".php";
require_once "controller/".$action.".php";

if (isset($_GET['ajax'])) {
	$ajax = $_GET['ajax'];
	require_once "ajax/".$ajax.'.php';
}

require_once "templates/".$action.".php";
require_once "templates/layout.php";
