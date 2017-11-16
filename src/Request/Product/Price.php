<?php
namespace KoronaAuto\Request\Product;
/**
 * Запрос цены товара
 */
class Price extends \KoronaAuto\Request\ARequest {
    protected function getMethod() {
        return 'product/price/';
    }
    
    /**
     * Получить цены товара
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто.
     * @return \KoronaAuto\Type\ProductType
     */
    public function execute($productId) {
        return (new \KoronaAuto\Type\ProductType())->handleProduct(parent::execute(['id' => $productId]));
    }
}
