<?php

namespace App\Core;

class Application
{
    public $router;
    public $request;
    public Response $response;
    public static string $ROOT_DIR;
    public function __construct($rootPath)
    {
        $this->router = new Router();
        $this->request = new Request();
        $this->request = new Response();
        self::$ROOT_DIR = $rootPath;
    }
    public function run()
    {
        echo $this->router->resolve();
    }
}