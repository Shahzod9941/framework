<?php

use App\Core\Application;

require_once '../vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contacts', 'contacts');
$app->router->get('/about', 'about');
$app->router->get('/feedback', function(){
    return 'Feedback page';
});
$app->router->get('/users', function(){
    return 'User Page';
});

$app->run();
