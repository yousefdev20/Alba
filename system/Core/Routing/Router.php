<?php

namespace Yousef\Alba\System\Core\Routing;

use Yousef\Alba\System\Core\App\Container;

class Router
{
    protected Container $container;

    protected Route $route;

    public function __construct()
    {
        $this->container = Container::getInstance();

        $this->route = new Route();
    }

    public function get(string $url, array $action): void
    {
        $this->addRoute($url, $action, 'get');
    }

    public function post(string $url, array $action): void
    {
        $this->addRoute($url, $action, 'get');
    }

    public function put(string $url, array $action): void
    {
        $this->addRoute($url, $action, 'get');
    }

    public function delete(string $url, array $action): void
    {
        $this->addRoute($url, $action, 'get');
    }

    public function name(string $name): static
    {
        $this->route->name($name);

        return $this;
    }

    protected function addRoute(string $url, array $action, string $type): void
    {
        $this->route->setUrl($url);
        $this->route->setController($action[0]);
        $this->route->setMethod($action[1]);
        $this->route->setType($type);

        $this->container->routes = $this->route;
    }
}