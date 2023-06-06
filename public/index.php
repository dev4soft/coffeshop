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

$app->add(
    new \Slim\Middleware\Session([
        'name' => 'coffeshop',
        'autorefresh' => true,
        'lifetime' => '1 hour',
    ])
);

$container = $app->getContainer();

$container['view'] = function () {

    return new \Slim\Views\PhpRenderer('../templates');
};

$container['configdb'] = require '../config/db.php';

$container['db'] = function ($container) {

    return new \Novokhatsky\DbConnect($container['configdb']);
};

$container['session'] = function () {

    return new \SlimSession\Helper();
};

$container['MainForm'] = function($container) {

    return new \CoffeShop\Controllers\MainForm($container['view'],
             new \CoffeShop\Models\Product($container['db']));
};

$container['Shop'] = function($container) {

    return new \CoffeShop\Controllers\Shop(new \CoffeShop\Models\Product($container['db']));
};

$container['Menu'] = function($container) {

    return new \CoffeShop\Controllers\Menu($container['view'],
             new \CoffeShop\Models\Product($container['db']));
};

$container['Basket'] = function($container) {

    return new \CoffeShop\Controllers\Basket($container['view'],
             new \CoffeShop\Models\Product($container['db']));
};

$container['Registration'] = function($container) {

    return new \CoffeShop\Controllers\Registration($container['view'],
             new \CoffeShop\Models\User($container['db']));
};

$container['Login'] = function($container) {

    return new \CoffeShop\Controllers\Login(
        $container['view'],
        new \CoffeShop\Models\User($container['db']),
        $container['session']
    );
};

$container['Profile'] = function($container) {

    return new \CoffeShop\Controllers\Profile(
        $container['view'],
        new \CoffeShop\Models\User($container['db']),
        $container['session']
    );
};

$container['Auth'] = function($container) {

    return new \CoffeShop\Controllers\Auth($container['session']);
};

$app->get('/', 'MainForm:index');
$app->get('/contacts', 'MainForm:contacts');
$app->get('/product', 'Menu:product');
$app->get('/registration', 'Registration:form');
$app->post('/registration', 'Registration:save');
$app->get('/login', 'Login:form');
$app->post('/login', 'Login:check');

$app->get('/get_category', 'Shop:category');
$app->get('/get_products', 'Shop:products');

$app->group('', function () {
    $this->get('/cart', 'Basket:cart');
    $this->get('/profile', 'Profile:index');
})->add('Auth:check');

$app->run();

