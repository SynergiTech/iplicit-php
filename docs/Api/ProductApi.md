# SynergiTech\Iplicit\ProductApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProduct()**](ProductApi.md#createProduct) | **POST** /api/Product | Create a product |
| [**deleteProduct()**](ProductApi.md#deleteProduct) | **DELETE** /api/Product/{id} | Permanently delete a product |
| [**getProduct()**](ProductApi.md#getProduct) | **GET** /api/Product/{idOrCode} | Get a product |
| [**getProducts()**](ProductApi.md#getProducts) | **GET** /api/Product | Get a list of products with a search filter |
| [**lockProduct()**](ProductApi.md#lockProduct) | **POST** /api/Product/{id}/lock | Lock a product |
| [**updateProduct()**](ProductApi.md#updateProduct) | **PATCH** /api/Product/{idOrCode} | Update a product |


## `createProduct()`

```php
createProduct($productCreate): string
```

Create a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productCreate = new \SynergiTech\Iplicit\Model\ProductCreate(); // \SynergiTech\Iplicit\Model\ProductCreate

try {
    $result = $apiInstance->createProduct($productCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCreate** | [**\SynergiTech\Iplicit\Model\ProductCreate**](../Model/ProductCreate.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($id)
```

Permanently delete a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the product

try {
    $apiInstance->deleteProduct($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the product | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($idOrCode, $include): \SynergiTech\Iplicit\Model\ProductRead
```

Get a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrCode = 'idOrCode_example'; // string | Id or code of the product
$include = 'include_example'; // string | Comma separated list of details to include: `ext`.

try {
    $result = $apiInstance->getProduct($idOrCode, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrCode** | **string**| Id or code of the product | |
| **include** | **string**| Comma separated list of details to include: &#x60;ext&#x60;. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\ProductRead**](../Model/ProductRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($descriptionContains, $productGroupId, $isPurchase, $isSale, $lastModifiedFrom, $lastModifiedTo, $take, $skip): \SynergiTech\Iplicit\Model\ProductSummary[]
```

Get a list of products with a search filter

The results are paginated using the !:skip and !:take parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$descriptionContains = 'descriptionContains_example'; // string
$productGroupId = 'productGroupId_example'; // string
$isPurchase = True; // bool
$isSale = True; // bool
$lastModifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$lastModifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getProducts($descriptionContains, $productGroupId, $isPurchase, $isSale, $lastModifiedFrom, $lastModifiedTo, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **descriptionContains** | **string**|  | [optional] |
| **productGroupId** | **string**|  | [optional] |
| **isPurchase** | **bool**|  | [optional] |
| **isSale** | **bool**|  | [optional] |
| **lastModifiedFrom** | **\DateTime**|  | [optional] |
| **lastModifiedTo** | **\DateTime**|  | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\ProductSummary[]**](../Model/ProductSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockProduct()`

```php
lockProduct($id): string
```

Lock a product

A locked product will mark all aspects (sale, purchase, etc) as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the product

try {
    $result = $apiInstance->lockProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->lockProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the product | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($idOrCode, $productUpdate): string
```

Update a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrCode = 'idOrCode_example'; // string | Id or code of the product
$productUpdate = new \SynergiTech\Iplicit\Model\ProductUpdate(); // \SynergiTech\Iplicit\Model\ProductUpdate |

try {
    $result = $apiInstance->updateProduct($idOrCode, $productUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrCode** | **string**| Id or code of the product | |
| **productUpdate** | [**\SynergiTech\Iplicit\Model\ProductUpdate**](../Model/ProductUpdate.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
