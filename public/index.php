<?php

ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    include dirname(__DIR__) . '/' . $class . '.php';
});

$foo = new application\init();

die();

$default_controller = 'Posts';
$default_action     = 'Index';


$controller = $default_controller . 'Controller';

// Удаление первого слеша
$request_string = ltrim($_SERVER['REQUEST_URI'], '/');
$request_string = preg_replace("/[^A-Za-z0-9\/]/", '', $request_string);

echo $request_string;


$controller = new application\controllers\PostsContoller();



/*$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action']))
{
    $controller->{$_GET['action']}();
}


echo $view->output();*/