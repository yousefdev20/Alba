<?php

namespace Yousef\Alba\System\Core\Routing;

class Route
{
    protected string $url;

    protected string $controller;

    protected string $method;

    protected string $type;

    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function name(string $name): void
    {
        $this->name = $name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function setController(string $controller): void
    {
        $this->controller = $controller;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function __toString(): string
    {
       return " -> $this->url -> $this->method -> $this->controller";
    }
}