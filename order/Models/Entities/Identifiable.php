<?php

declare(strict_types=1);

namespace order\Models\Entities;

/**
 * @template T of EntityIdInterface
 * @implements IdentifiableInterface<T>
 */
class Identifiable implements IdentifiableInterface
{
    /**
     * @var T
     */
    protected EntityIdInterface $id;

    /**
     * @param T $id
     */
    public function __construct(EntityIdInterface $id)
    {
        $this->id = $id;
    }

    /**
     * @return T
     */
    public function entityId(): EntityIdInterface
    {
        return $this->id;
    }

    public function id(): int
    {
        return $this->id->value();
    }
}
