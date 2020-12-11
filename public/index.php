<?php
session_start();
session_destroy();
include(__DIR__ . "/../private/errors.php");
include(__DIR__ . "/../private/router.php");
/*$verbo = $_SERVER['REQUEST_METHOD'];
if ($verbo == "OPTIONS") {
    die();
}*/

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$segment = '404';
$endPoint = $uriSegments[1];

$segment = '404';
if (in_array($endPoint, $router)) {
    $segment = ($endPoint == '') ? 'home' : $endPoint;
}

include(__DIR__ . '/../private/Controller/' . $segment . 'Controller.php');
echo $response;
