<?php

require_once __DIR__."/../../src/BlogBundle/Controller/MainController.php";

$request = $_SERVER['REQUEST_URI'];
$mainCtrl = new MainController();

// var_dump($mainCtrl->homeAction());
// die;

switch ($request) {
  case '/':
    $response = $mainCtrl->homeAction();
  break;
  case '/admin';
    $response = $mainCtrl->adminAction();
    break;
  default:
    $response = $mainCtrl->notFoundAction();
}
