<?php
namespace KoronaAuto\Type;
/**
 * Описание продукта
 */
class ProductType extends CustomType {
    /**
     * Уникальный идентификатор товара в магазине Корона Авто.
     * @var int
     */
    public $id;	
    
    /**
     * Наименование детали
     * @var string
     */
    public $name;	
    
    /**
     * Производитель детали
     * @var string
     */
    public $producer;	
    
    /**
     * Марка
     * @var string
     */
    public $brand;
            
    /**
     * Заводской номер детали (артикул)
     * @var string
     */
    public $factory_number;	    
    
    /**
     * Оригинальный номер детали
     * @var string
     */
    public $original_number; 
    
    /**
     * Вес детали, кг
     * @var float
     */
    public $weight; 
    
    /**
     * Объем детали, мм3
     * @var float
     */
    public $volume;
    
    /**
     * Высота детали, мм
     * @var int
     */
    public $height;
    
    /**
     * Ширина детали, мм
     * @var int
     */
    public $width;
    
    /**
     * Длина(глубина) детали, мм
     * @var int
     */
    public $length;    
    
    /**
     * Остатки и цены на складах
     * @var \KoronaAuto\Type\WarehouseType[]
     */
    public $warehouses = [];
    
    /**
     * Обрабатывает цены и остатки на складах
     * @param array $info
     * @return \KoronaAuto\Type\WarehouseType[]
     */
    private function handleWarehouses($info) {
        $warehouses = [];
        array_map(function($item) use (&$warehouses) {
            $key = array_search($item['warehouse']['name'], array_column($warehouses, 'name'));            
            if ($key===false) {
                $warehouses[] = $item['warehouse'];
            } else {
                $warehouses[$key] = array_merge($warehouses[$key], $item['warehouse']);
            }
        }, array_merge(
                isset($info['prices']) ? $info['prices'] : [], 
                isset($info['stock']) ? $info['stock'] : []
        ));
        
        return array_map(function($data) { 
            return (new \KoronaAuto\Type\WarehouseType())->set($data);
        }, $warehouses);        
    }   
    
    /**
     * Обработать информацию по товару
     * @param array $data
     * @return \KoronaAuto\Type\ProductType
     */
    public function handleProduct($data) {        
        $info = isset($data['product']) ? $data['product'] : $data;
        $info['warehouses'] = $this->handleWarehouses($info);
        unset($info['prices'], $info['stock']);
        return $this->set($info);
    }    
    
    /**
     * Обработать информацию по нескольким товарам
     * @param array $data
     * @return \KoronaAuto\Type\ProductType[]
     */
    public function handleArrayOfProducts($data) {
        $info = $data['product'];
        return array_map(function($info) { 
            return $this->handleProduct($info);
        }, $info);
    }
}
