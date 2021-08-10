<?php

namespace App\Core;

class Application
{
    public $router;
    public $request;

    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
    }
    public function run()
    {
        echo $this->router->resolve();
    }
}