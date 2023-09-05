<?php

$uri = $_SERVER["REQUEST_URI"];
$path = parse_url($uri, PHP_URL_PATH);
$path = ltrim($path, '/');
$segments = explode("/", $path);
$page = $segments[0];

switch ($page) {
	case '': 
		include './register_user.php'; 
		break;
	case 'register_user': 
		include './register_user.php'; 
		break;

	case 'home_facebook': 
		include './pages/home_facebook.php'; 
		break;

	default:
		include './pages/404.php'; 
		break;
}
