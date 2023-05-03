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


class MyModel
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }


    public function dt()
    {
        return $this->db->getValue('select now()');
    }
}


class MyController
{
    private $view;
    private $mymodel;


    public function __construct($view, $mymodel)
    {
        $this->view = $view;
        $this->mymodel = $mymodel;
    }


    public function index($request, $response)
    {

        $date = $this->mymodel->dt();

        $response->getBody()->write("Hello world!" . " now is ${date}");
        return $response;
    }
};


$container['MyController'] = function($container) {

    return new MyController($container['view'], new MyModel($container['db']));
};

$app->get('/', 'MyController:index');

$app->run();

