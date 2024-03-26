<?php

namespace Yousef\Alba\System\Core\App;

class Application
{
    protected Container $container;

    public function __construct()
    {
        $this->_loadCoreDependencies();
    }

    public function handelIncomingRequest(): void
    {

    }

    private function _loadCoreDependencies(): void
    {
        $this->_loadRoutes();
    }

    private function _loadRoutes(): void
    {
        include_once __DIR__ . "/../../../routes/web.php";
    }
}