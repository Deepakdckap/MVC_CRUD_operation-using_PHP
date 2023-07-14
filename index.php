<?php
require 'Router.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
$router = new Router();

$router->get('/','form');
//$router->get('/view','view');
$router->post('/create','create');
$router->get('/lists','list');
$router->post('/edit','edit');
$router->put('/update','update');
$router->delete('/delete','delete');


$router->only($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);