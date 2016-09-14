<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../core/system/autoloader.php';

$loader = new core\system\Psr4AutoloaderClass();

$loader->register();


$loader->addNamespace('\core\system', dirname(__DIR__) . '/core/system');
$loader->addNamespace('\application', dirname(__DIR__) . '/application');

$bootstrap = new \core\system\bootstrap();

$bootstrap->init();

die();