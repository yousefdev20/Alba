<?php

use Yousef\Alba\System\Core\App\Application;

require __DIR__ . '/vendor/autoload.php';

(new Application())->handelIncomingRequest();

die(json_encode(\Yousef\Alba\System\Core\App\Container::getInstance()->routes));