<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();

$container['view'] = function ($container) {

    return new \Slim\Views\PhpRenderer('../templates');
};

$container['configdb'] = require '../config/ConfigDb.php';

$container['db'] = function ($container) {

    return new \Novokhatsky\DbConnect($container['configdb']);
};

$app->run();

