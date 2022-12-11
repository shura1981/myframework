<?php
$app->get('/', function () use ($app) {
    echo URL;

});
$app->get('/home', function () use ($app) {
    require_once("views/home.php");
});