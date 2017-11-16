<?php
namespace KoronaAuto\Request\Product;
/**
 * Запрос получения характеристик товара
 */
class Description extends \KoronaAuto\Request\ARequest {
    protected function getMethod() {
        return 'product/description/';
    }
    
    /**
     * Получить характеристики товара
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто
     * @return \KoronaAuto\Type\ProductType
     */
    public function execute($productId) {
        return (new \KoronaAuto\Type\ProductType())->handleProduct(parent::execute(['id' => $productId]));
    }
}
