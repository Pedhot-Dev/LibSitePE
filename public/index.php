<?php

require_once __DIR__ . "/../vendor/autoload.php";

use PedhotDev\LibSitePE\Application;

$app = new Application();

$app->router->get("/", function () {
    return "Hello World";
});

$app->router->get("/thanks", "thanks");

$app->run();