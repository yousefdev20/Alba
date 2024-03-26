<?php

namespace Yousef\Alba\System\Core\Route;

use Yousef\Alba\System\Core\App\Container;
use Yousef\Alba\System\Core\Request\Request;

class Route
{
    protected static Container $container;

    protected static Builder\Route $route;

    protected static Request $request;

    public function __construct()
    {
        self::$container = Container::getInstance();

        self::$route = new Builder\Route();

        self::$request = new Request();
    }

    /**
     * @param string $url
     * @param array<string, string> $action
     * @return Builder\Route
     */
    public static function get(string $url, array $action): Builder\Route
    {
        return self::$route->get($url, $action);
    }

    /**
     * @param string $url
     * @param array<string, string> $action
     * @return Route
     */
    public static function post(string $url, array $action): Route
    {
        Container::getInstance()->routes = [
            'url' => $url, 'controller' => $action[0], 'method' => $action[1], 'type' => 'post'
        ];

        return new static();
    }
}