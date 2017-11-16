<?php
namespace KoronaAuto\Request\Product;
/**
 * Запрос остатков товара на складах
 */
class Stock extends \KoronaAuto\Request\ARequest {
    protected function getMethod() {
        return 'product/stock/';
    }
    
    /**
     * Получить остатки товара на складах
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто.
     * @return \KoronaAuto\Type\ProductType
     */
    public function execute($productId) {
        return (new \KoronaAuto\Type\ProductType())->handleProduct(parent::execute(['id' => $productId]));
    }
}
