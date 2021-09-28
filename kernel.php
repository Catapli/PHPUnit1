<?php

require(dirname(__FILE__) . "/vendor/autoload.php");

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$route_views = $_SERVER['DOCUMENT_ROOT'].'/../views/';
$route_src = $_SERVER['DOCUMENT_ROOT'].'/../src/';
$route_config = $_SERVER['DOCUMENT_ROOT'].'/../config/';
$rutes_vistes = $_SERVER['DOCUMENT_ROOT']."/../vistas/";
