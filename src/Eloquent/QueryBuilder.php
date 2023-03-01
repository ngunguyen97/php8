<?php

namespace App\Eloquent;

use App\Container\Container;

class QueryBuilder
{
    private Connection $connection;

    public function __construct(Container $container)
    {
        $this->connection = $container->make(Connection::class);
    }
}