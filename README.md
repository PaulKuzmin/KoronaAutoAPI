# PHP API Wrapper for https://korona-auto.com/

Full description: https://korona-auto.com/api-info/

## Install

Via Composer

``` bash
$ composer require pavelkuzmin/korona-auto-api
```

## In action

See in action (http://srs.atriumdv.com/) (russian).

## Usage

#### Init
``` php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
```

#### Search products
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
$result = $api->search('M12332'); // part number or name
```

Result
```
Array
(
    [0] => KoronaAuto\Type\ProductType Object
        (
            [id] => 2971788
            [name] => Рессора Рено о.н. 7482137384  (7482137384)
            [producer] => Renault
            [brand] => 
            [factory_number] => 7482137384
            [original_number] => 
            [weight] => 
            [volume] => 
            [height] => 
            [width] => 
            [length] => 
            [warehouses] => Array
                (
                )

        )

    [1] => KoronaAuto\Type\ProductType Object
        (
            [id] => 2971788
            [name] => Рессора Рено о.н. 7482137384  (7482137384)
            [producer] => Renault
            [brand] => 
            [factory_number] => 7482137384
            [original_number] => 
            [weight] => 
            [volume] => 
            [height] => 
            [width] => 
            [length] => 
            [warehouses] => Array
                (
                )

        )

)
```

#### Product description
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
$result = $api->productDescription(2324387); // id of product
```

Result
```
KoronaAuto\Type\ProductType Object
(
    [id] => 
    [name] => Гайка накидная МАН, Скания, Вольво, Мерседес, ДАФ о.н. (8.92002)
    [producer] => DIESEL TECHNIC
    [brand] => MERCEDES-BENZ, MAN
    [factory_number] => 8.92002
    [original_number] => A915017004101, 915017 004101, A3870004102, 06.71030-2102, 003870 004102, 000 990 8254, A9908254
    [weight] => 0.004
    [volume] => 
    [height] => 
    [width] => 
    [length] => 
    [warehouses] => Array
        (
        )

)
```

#### Summary information about product with prices and quantity on the warehouses of company
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
$result = $api->productInfo(2324387); // id of product
```

Result
```
KoronaAuto\Type\ProductType Object
(
    [id] => 
    [name] => Гайка накидная МАН, Скания, Вольво, Мерседес, ДАФ о.н. (8.92002)
    [producer] => DIESEL TECHNIC
    [brand] => MERCEDES-BENZ, MAN
    [factory_number] => 8.92002
    [original_number] => A915017004101, 915017 004101, A3870004102, 06.71030-2102, 003870 004102, 000 990 8254, A9908254
    [weight] => 0.004
    [volume] => 
    [height] => 
    [width] => 
    [length] => 
    [warehouses] => Array
        (
            [0] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Воронеж
                    [quantity] => 0
                    [value] => 4.31
                    [currency] => RUB
                )

            [1] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Казань
                    [quantity] => 0
                    [value] => 4.35
                    [currency] => RUB
                )

            [2] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Москва "Север"
                    [quantity] => 18
                    [value] => 2.93
                    [currency] => RUB
                )

            [3] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Нижний Новгород
                    [quantity] => 0
                    [value] => 4.26
                    [currency] => RUB
                )

            [4] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Новосибирск
                    [quantity] => 0
                    [value] => 4.43
                    [currency] => RUB
                )

            [5] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Распределительный центр
                    [quantity] => 0
                    [value] => 4.2
                    [currency] => RUB
                )

            [6] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Ростов-на-Дону
                    [quantity] => 0
                    [value] => 4.35
                    [currency] => RUB
                )

            [7] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Самара
                    [quantity] => 0
                    [value] => 4.3
                    [currency] => RUB
                )

            [8] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Санкт-Петербург
                    [quantity] => 0
                    [value] => 4.2
                    [currency] => RUB
                )

            [9] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Челябинск
                    [quantity] => 0
                    [value] => 4.39
                    [currency] => RUB
                )

        )

)
```

#### Product prices
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
$result = $api->productPrice(2324387); // id of product
```

Result
```
KoronaAuto\Type\ProductType Object
(
    [id] => 
    [name] => Гайка накидная МАН, Скания, Вольво, Мерседес, ДАФ о.н. (8.92002)
    [producer] => DIESEL TECHNIC
    [brand] => 
    [factory_number] => 8.92002
    [original_number] => 
    [weight] => 
    [volume] => 
    [height] => 
    [width] => 
    [length] => 
    [warehouses] => Array
        (
            [0] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Воронеж
                    [quantity] => 
                    [value] => 4.31
                    [currency] => RUB
                )

            [1] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Казань
                    [quantity] => 
                    [value] => 4.35
                    [currency] => RUB
                )

            [2] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Москва "Север"
                    [quantity] => 
                    [value] => 2.93
                    [currency] => RUB
                )

            [3] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Нижний Новгород
                    [quantity] => 
                    [value] => 4.26
                    [currency] => RUB
                )

            [4] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Новосибирск
                    [quantity] => 
                    [value] => 4.43
                    [currency] => RUB
                )

            [5] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Распределительный центр
                    [quantity] => 
                    [value] => 4.2
                    [currency] => RUB
                )

            [6] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Ростов-на-Дону
                    [quantity] => 
                    [value] => 4.35
                    [currency] => RUB
                )

            [7] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Самара
                    [quantity] => 
                    [value] => 4.3
                    [currency] => RUB
                )

            [8] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Санкт-Петербург
                    [quantity] => 
                    [value] => 4.2
                    [currency] => RUB
                )

            [9] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Челябинск
                    [quantity] => 
                    [value] => 4.39
                    [currency] => RUB
                )

        )

)
```

#### Stock of products
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_API_TOKEN');
$result = $api->productStock(2324387); // id of product
```

Result
```
KoronaAuto\Type\ProductType Object
(
    [id] => 
    [name] => Гайка накидная МАН, Скания, Вольво, Мерседес, ДАФ о.н. (8.92002)
    [producer] => DIESEL TECHNIC
    [brand] => 
    [factory_number] => 8.92002
    [original_number] => 
    [weight] => 
    [volume] => 
    [height] => 
    [width] => 
    [length] => 
    [warehouses] => Array
        (
            [0] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Воронеж
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [1] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Казань
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [2] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Москва "Север"
                    [quantity] => 18
                    [value] => 
                    [currency] => 
                )

            [3] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Нижний Новгород
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [4] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Новосибирск
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [5] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Распределительный центр
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [6] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Ростов-на-Дону
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [7] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Самара
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [8] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Санкт-Петербург
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

            [9] => KoronaAuto\Type\WarehouseType Object
                (
                    [name] => Челябинск
                    [quantity] => 0
                    [value] => 
                    [currency] => 
                )

        )

)
```