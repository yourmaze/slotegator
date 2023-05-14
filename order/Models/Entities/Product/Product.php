<?php

declare(strict_types=1);

namespace order\Models\Entities\Product;

use order\Models\Entities\Identifiable;

/**
 * @extends Identifiable<ProductId>
 */
final class Product extends Identifiable
{
    private int $quantity;
    private int $price;

    public function __construct(ProductId $id, int $quantity, int $price)
    {
        parent::__construct($id);
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function price(): int
    {
        return $this->price;
    }
}
