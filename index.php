<?php

use Yousef\Micro\System\Core\App\Application;

require __DIR__ . '/vendor/autoload.php';

(new Application())->handelIncomingRequest();

die(json_encode(\Yousef\Micro\System\Core\App\Container::getInstance()->routes));