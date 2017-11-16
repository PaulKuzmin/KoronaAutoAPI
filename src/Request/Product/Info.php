<?php
namespace KoronaAuto\Request\Product;
/**
 * Запрос суммарной информации по товару (функции description, price и stock)
 */
class Info extends \KoronaAuto\Request\ARequest {
    protected function getMethod() {
        return 'product/info/';
    }
    
    /**
     * Получить суммарную информацию по товару
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто.
     * @return \KoronaAuto\Type\ProductType
     */
    public function execute($productId) {
        return (new \KoronaAuto\Type\ProductType())->handleProduct(parent::execute(['id' => $productId]));
    }
}
