<?php
require_once 'vendor/autoload.php';
$app = new \Slim\Slim();
define('URL',$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
// $app->response()->header('Content-Type', 'application/json;charset=UTF-8');


require_once('rutas/boopstrap.php');
require_once('rutas/multimedia.php');
require_once('rutas/pruebas.php');



//Inicia el Api
$app->run();