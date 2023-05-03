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


    public function about($request, $response)
    {
        $response->getBody()->write("About of us");

        return $response;
    }
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


$container['MyController'] = function($container) {

    return new MyController($container['view'], new MyModel($container['db']));
};

$container['MyMiddle'] = function($container) {

    return new MyMiddle();
};

$app->get('/', 'MyController:index');

$app->group('', function () {
    $this->get('/about', 'MyController:about');
})->add('MyMiddle:ware');

$app->run();

