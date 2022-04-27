<?php

namespace PedhotDev\LibSitePE;

class Router
{

    protected array $routes;

    public function __construct(public Request $request)
    {
    }

    public function get($path, $callback)
    {
        $this->routes["get"][$path] = $callback;
    }

    public function resolve(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if (!$callback) {
            echo "Not found";
            exit();
        }
        echo call_user_func($callback);
    }

}