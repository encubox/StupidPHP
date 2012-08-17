<?php

// include everything we need
require_once('config.php');
foreach (glob("config/*.php") as $filename) {
    require_once($filename);
}
foreach (glob("lib/*.php") as $filename) {
    require_once($filename);
}
foreach (glob("models/*.php") as $filename) {
	require_once($filename);
}
foreach (glob("controllers/*.php") as $filename) {
    require_once($filename);
}

// connect to MySQL database
$con = mysql_connect("localhost", Config::$dbUser, Config::$dbPassword);
mysql_select_db(Config::$dbName);

// escape all data
foreach ($_REQUEST as $key => $value) {
	$_REQUEST[$key] = htmlspecialchars(mysql_real_escape_string($_REQUEST[$key]));
}
foreach ($_GET as $key => $value) {
	$_GET[$key] = htmlspecialchars(mysql_real_escape_string($_GET[$key]));
}
foreach ($_POST as $key => $value) {
	$_POST[$key] = htmlspecialchars(mysql_real_escape_string($_POST[$key]));
}

//////////////////////////////////////////////////
// determine controller and action

$uriExplodedByQuery = explode('?', $_SERVER['REQUEST_URI']);
$explodedPath = explode('/', $uriExplodedByQuery[0]);

// by default
$controllerName = 'home';
$actionName = 'index';

if (!empty($explodedPath[1])) {	
	if (class_exists(ucfirst($explodedPath[1] . 'Controller'))) {				
		$controllerName = $explodedPath[1];
		if (!empty($explodedPath[2]) && method_exists($controllerName . 'Controller', $explodedPath[2])) {
			$actionName = $explodedPath[2];
		}
	}
}
//////////////////////////////////////////////////

// call action
$controllerClassName = ucfirst($controllerName) . 'Controller';
$controller = new $controllerClassName();
$controller->$actionName();

// render layout and view
ob_start();
$controller->renderView($controllerName, $actionName);
$content = ob_get_clean();
include('views/layouts/application.html.php');