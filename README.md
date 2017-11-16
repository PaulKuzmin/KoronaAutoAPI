# PHP API for https://korona-auto.com/
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
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
```

#### Search products
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
$result = $api->search('M12332'); // part number or name
```

#### Product description
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
$result = $api->productDescription(2324387); // id of product
```

#### Summary information about product with prices and quantity on the warehouses of company
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
$result = $api->productInfo(2324387); // id of product
```

#### Product prices
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
$result = $api->productPrice(2324387); // id of product
```

#### Stock of products
```php
$api = new KoronaAuto\KoronaAutoAPI('YOUR_BOT_API_TOKEN');
$result = $api->productStock(2324387); // id of product
```
