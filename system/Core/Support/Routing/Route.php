<?php

namespace Yousef\Alba\System\Core\Support\Routing;

use Yousef\Alba\System\Core\Routing\Concerns\Route as AbstractRoute;
use Yousef\Alba\System\Core\Routing\Router;

class Route extends AbstractRoute
{
    protected Router $router;
    
    public function __construct()
    {
        $this->router = new Router();
    }

    public function get(string $url, array $action): void
    {
        $this->router->get($url, $action);
    }

    public function post(string $url, array $action): void
    {
        $this->router->post($url, $action);
    }

    public function put(string $url, array $action): void
    {
        $this->router->put($url, $action);
    }

    public function delete(string $url, array $action): void
    {
        $this->router->delete($url, $action);
    }

    public static function name(string $name): self
    {
        return new self();
    }
}