<?php

use App\Core\Application;

require_once '../vendor/autoload.php';

$app = new Application();

$app->router->get('/', 'home');

$app->router->get('/contacts', 'contacts');
$app->router->get('/users', function(){
    return 'User Page';
});

$app->run();
