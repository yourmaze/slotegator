<?php

declare(strict_types=1);

namespace order\Models\Entities;

/**
 * @template T of EntityIdInterface
 */
interface IdentifiableInterface
{
    /**
     * @return T
     */
    public function entityId(): EntityIdInterface;
    public function id(): int;
}
