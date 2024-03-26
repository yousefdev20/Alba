<?php

namespace Yousef\Micro\System\Core\Route\Builder;

use Yousef\Micro\System\Core\App\Container;

class Route
{

//    protected Container $container = ;

    public function __construct()
    {
        $this->container = $this->container::getInstance();
    }

    public function get(string $url, array $action): static
    {
        return $this;
    }

    public function post(string $url, array $action): static
    {
        return $this;
    }

    public function put(string $url, array $action): static
    {
        return $this;
    }

    public function delete(string $url, array $action): static
    {
        return $this;
    }

    public function name(): static
    {
        return $this;
    }
}