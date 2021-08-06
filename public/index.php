<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/../inc/user.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/../inc/connexion.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/../inc/functions.php');

$route = $_SERVER['REQUEST_URI'];

$filename = explode('/', $route)[1];

if($filename === '') {
    $filename = 'home';
}

$path = $_SERVER['DOCUMENT_ROOT'] . '/../routes/' . $filename . '.php';

if (is_file($path)) {
    require_once($path);
} else {
    header("HTTP/1.1 404 Not Found");
    require($_SERVER['DOCUMENT_ROOT'] . '/../inc/templates/error404.php');
}