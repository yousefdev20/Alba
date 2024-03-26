<?php

namespace Yousef\Alba\System\Core\Database;

class Connector
{
    public function getConnection()
    {
        return (new \PDO('', '', ''))->query('');
    }
}