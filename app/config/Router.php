<?php

require_once __DIR__."/../../src/BlogBundle/Controller/MainController.php";

$request = $_SERVER['REQUEST_URI'];
$mainCtrl = new MainController();

var_dump($mainCtrl, $request);
die;

switch ($request) {
  case '/accueil':
    $response = $mainCtrl->homeAction();
  break;
  case '/admin';
    $response = $mainCtrl->adminAction();
    break;
  default:
    $response = $mainCtrl->notFoundAction();
}
