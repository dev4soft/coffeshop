<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

//$app->config(
//    [
//        'DisplayErrorDetails' => true,
//    ]
//);

$container = $app->getContainer();

$container['view'] = function ($container) {

    return new \Slim\Views\PhpRenderer('../templates');
};

$container['configdb'] = require '../config/db.php';

$container['db'] = function ($container) {

    return new \Novokhatsky\DbConnect($container['configdb']);
};


class MyTest
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function index($request, $response)
    {

        $date = $this->db->getValue('select now()');

        $response->getBody()->write("Hello world!" . " now is ${date}");
        return $response;
    }
};


$container['MyTest'] = function($container) {

    return new MyTest($container['db']);
};
$app->get('/', 'MyTest:index');

$app->run();

