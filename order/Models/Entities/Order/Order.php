<?php

declare(strict_types=1);

namespace order\Models\Entities\Order;

use order\Models\Entities\Identifiable;
use order\Models\Entities\Product\Product;
use order\Models\Entities\Product\ProductId;

/**
 * @extends Identifiable<OrderId>
 */
final class Order extends Identifiable
{
    /**
     * @var array<Product>
     */
    private array $products;

    /**
     * @param OrderId $id
     * @param array<Product> $products
     */
    public function __construct(
        OrderId $id,
        array $products
    ) {
        parent::__construct($id);
        $this->products = $products;
    }

    public function calculateTotalSum(): int
    {
        $totalSum = 0;
        foreach ($this->products as $products) {
            $totalSum += $products->price() * $products->quantity();
        }
        return $totalSum;
    }

    /**
     * @return array<Product>
     */
    public function getItems(): array
    {
        return $this->products;
    }

    public function getItemsCount(): int
    {
        // Получение количества товаров в заказе
        return count($this->products);
    }

    /**
     * Здесь вариантов реализаций много. Нужно учесть что будет если
     * мы будем добавлять товар, который уже есть в заказе и прочее
     *
     * @param Product $product
     * @return $this
     */
    public function addItem(Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * Немного изменил контракт метода так как логичнее сделать
     * удаление по id а не по сущности продукта
     *
     * @param ProductId $productId
     * @return void
     */
    public function deleteItem(ProductId $productId): void
    {
        // удаление товара
    }
}
