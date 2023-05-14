<?php

declare(strict_types=1);

namespace order\Models\Entities;

interface EntityIdInterface
{
    public function value(): int;
}
