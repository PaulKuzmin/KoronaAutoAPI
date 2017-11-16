<?php
namespace KoronaAuto\Request;
/**
 * Запрос поиска товаров
 */
class Search extends ARequest {
    protected function getMethod() {
        return 'search/';
    }
    
    /**
     * Выполнить поиск товаров
     * @param string $searchString Строка поискового запроса
     * @return \KoronaAuto\Type\ProductType[]
     */
    public function execute($searchString) {
        return (new \KoronaAuto\Type\ProductType())->handleArrayOfProducts(parent::execute(['q' => $searchString]));
    }
}
