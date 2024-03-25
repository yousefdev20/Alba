<?php

namespace Yousef\Micro\System\Core\Database;

class Connector
{
    public function getConnection()
    {
        return (new \PDO('', '', ''))->query('');
    }
}