<?php

namespace Yousef\Micro\System\Core\Route;

use Yousef\Micro\System\Core\App\Container;

class RouteDispatcher
{
    protected function validateRoute(): bool
    {
        $routes = Container::getInstance()->routes;

        for ($i = 0; $i < count($routes); $i++) {
//            if ()
        }

        return false;
    }

    public function dispatch()
    {

    }
}