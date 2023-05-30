<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);

$app = new \Slim\App($c);

$container = $app->getContainer();

$container['view'] = function ($container) {

    return new \Slim\Views\PhpRenderer('../templates');
};

$container['configdb'] = require '../config/db.php';

$container['db'] = function ($container) {

    return new \Novokhatsky\DbConnect($container['configdb']);
};


class MyMiddle
{
    public function __invoke($request, $response, $next)
    {
        error_log("middleware");


        return $next($request, $response);
    }


    public function ware($request, $response, $next)
    {
        error_log("ware !!!  middleware");


        return $next($request, $response);
    }
};

$container['MainForm'] = function($container) {

    return new \CoffeShop\Controllers\MainForm($container['view'],
             new \CoffeShop\Models\Product($container['db']));
};

$container['Menu'] = function($container) {

    return new \CoffeShop\Controllers\Menu($container['view'],
             new \CoffeShop\Models\Product($container['db']));
};

$container['Registration'] = function($container) {

    return new \CoffeShop\Controllers\Registration($container['view'],
             new \CoffeShop\Models\User($container['db']));
};

$container['MyMiddle'] = function($container) {

    return new MyMiddle();
};

$app->get('/', 'MainForm:index');
$app->get('/contacts', 'MainForm:contacts');
$app->get('/product', 'Menu:product');
$app->get('/registration', 'Registration:form');
$app->post('/registration', 'Registration:save');

$app->group('', function () {
    $this->get('/about', 'MainForm:about');
})->add('MyMiddle:ware');

$app->run();

