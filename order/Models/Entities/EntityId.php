<?php

declare(strict_types=1);

namespace order\Models\Entities;

class EntityId implements EntityIdInterface
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function value(): int
    {
        return $this->id;
    }
}
