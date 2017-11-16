<?php
namespace KoronaAuto\Type;
/**
 * Описание цен и остатков на складе
 */
class WarehouseType extends CustomType {
    /**
     * Склад (наименование)
     * @var string
     */
    public $name;
    
    /**
     * Доступное количество товара на складе
     * @var float
     */
    public $quantity;
    
    /**
     * Значение цены
     * @var float
     */
    public $value;
    
    /**
     * Валюта (3-х буквенный код)
     * @var string
     */
    public $currency;
}
