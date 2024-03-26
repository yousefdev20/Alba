<?php

namespace Yousef\Micro\System\Core\App;

class Container
{
    protected static Container $container;

    /**
     * @var array
     */
    private static array $services;

    private function __construct()
    {
    }

    final public static function getInstance(): Container
    {
        if (!isset(self::$container)) {
            return self::$container = new self();
        }

        return self::$container;
    }

    public function __get(string $name)
    {
        return self::$services[$name];
    }

    public function __set(string $name, $value): void
    {
        self::$services[$name][] = $value;
    }
}