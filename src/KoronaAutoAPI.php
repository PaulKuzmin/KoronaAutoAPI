<?php
namespace KoronaAuto;
/**
 * Wrapper for API korona-auto.com
 * https://korona-auto.com/api-info/
 */
class KoronaAutoAPI {
    private $apiUid;
    
    /**
     * Конструктор
     * @param string $apiUid Уникальный идентификатор API-клиента. Выдается менеджером по запросу. Привязан к IP клиента.
     */
    public function __construct($apiUid) {
        $this->apiUid = $apiUid;
    }    
    
    /**
     * Выполнить поиск товаров
     * @param string $searchString
     * @return \KoronaAuto\Type\ProductType[]
     */
    public function search($searchString) {
        return (new Request\Search($this->apiUid))->execute($searchString);
    }
    
    /**
     * Получить характеристики товара
     * @param int $productId Уникальный идентификатор товара в магазине Корона Авто
     * @return \KoronaAuto\Type\ProductType
     */
    public function productDescription($productId) {
        return (new Request\Product\Description($this->apiUid))->execute($productId);
    }
    
    /**
     * Получить суммарную информацию по товару
     * @param int $productId Уникальный идентификатор товара в магазине Корона Авто
     * @return \KoronaAuto\Type\ProductType
     */
    public function productInfo($productId) {
        return (new Request\Product\Info($this->apiUid))->execute($productId);
    }
    
    /**
     * Получить цены товара
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто
     * @return \KoronaAuto\Type\ProductType
     */
    public function productPrice($productId) {
        return (new Request\Product\Price($this->apiUid))->execute($productId);
    }
    
    /**
     * Получить остатки товара на складах
     * @param type $productId Уникальный идентификатор товара в магазине Корона Авто
     * @return \KoronaAuto\Type\ProductType
     */    
    public function productStock($productId) {
        return (new Request\Product\Stock($this->apiUid))->execute($productId);
    }
}
