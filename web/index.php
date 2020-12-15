<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../app/config/Router.php';

$view = $response['view'];
$attributes = $response['attributes'];
var_dump($view, $attributes);
die;

require_once $view;
