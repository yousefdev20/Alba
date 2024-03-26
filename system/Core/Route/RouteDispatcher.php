<?php

namespace Yousef\Alba\System\Core\Route;

use Yousef\Alba\System\Core\App\Container;

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