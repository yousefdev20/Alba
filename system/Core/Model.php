<?php

namespace Yousef\Alba\System\Core;

abstract class Model
{
    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected ?string $connection;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected string $table;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected array $with = [];

    public function getConnection(): ?string
    {
        return $this->connection;
    }

    public function setConnection(?string $name): Model
    {
        $this->connection = $name;

        return $this;
    }

    public function getTable(): ?string
    {
        return $this->table;
    }

    public function setTable(?string $table): Model
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Begin querying the model.
     *
     * @return Model
     */
    public static function query(): Model
    {
        return new static();
    }
}