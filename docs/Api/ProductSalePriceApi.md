# SynergiTech\Iplicit\ProductSalePriceApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductSalePrice()**](ProductSalePriceApi.md#createProductSalePrice) | **POST** /api/Product/{productRef}/SalePrice | Create a product sale price |
| [**deleteProductSalePrice()**](ProductSalePriceApi.md#deleteProductSalePrice) | **DELETE** /api/Product/{productRef}/SalePrice/{priceId} | Delete a product sale price |
| [**getProductSalePrice()**](ProductSalePriceApi.md#getProductSalePrice) | **GET** /api/Product/{productRef}/SalePrice/{priceId} | Get a product sale price |
| [**getProductSalePrices()**](ProductSalePriceApi.md#getProductSalePrices) | **GET** /api/Product/{productRef}/SalePrice | Get a product sale price |
| [**lockProductSalePrice()**](ProductSalePriceApi.md#lockProductSalePrice) | **POST** /api/Product/{productRef}/SalePrice/{priceId}/lock | Lock a product sale price |
| [**unlockProductSalePrice()**](ProductSalePriceApi.md#unlockProductSalePrice) | **POST** /api/Product/{productRef}/SalePrice/{priceId}/unlock | Unlock a product sale price |
| [**updateProductSalePrice()**](ProductSalePriceApi.md#updateProductSalePrice) | **PATCH** /api/Product/{productRef}/SalePrice/{priceId} | Update a product sale price |


## `createProductSalePrice()`

```php
createProductSalePrice($productRef, $domain, $productSalePriceCreate): string
```

Create a product sale price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productSalePriceCreate = new \SynergiTech\Iplicit\Model\ProductSalePriceCreate(); // \SynergiTech\Iplicit\Model\ProductSalePriceCreate |

try {
    $result = $apiInstance->createProductSalePrice($productRef, $domain, $productSalePriceCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->createProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productSalePriceCreate** | [**\SynergiTech\Iplicit\Model\ProductSalePriceCreate**](../Model/ProductSalePriceCreate.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductSalePrice()`

```php
deleteProductSalePrice($productRef, $priceId, $domain): string
```

Delete a product sale price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->deleteProductSalePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->deleteProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductSalePrice()`

```php
getProductSalePrice($productRef, $priceId, $domain): \SynergiTech\Iplicit\Model\ProductSalePriceRead
```

Get a product sale price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getProductSalePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->getProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ProductSalePriceRead**](../Model/ProductSalePriceRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductSalePrices()`

```php
getProductSalePrices($productRef, $domain): \SynergiTech\Iplicit\Model\ProductSalePriceRead[]
```

Get a product sale price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getProductSalePrices($productRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->getProductSalePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ProductSalePriceRead[]**](../Model/ProductSalePriceRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockProductSalePrice()`

```php
lockProductSalePrice($productRef, $priceId, $domain): string
```

Lock a product sale price

A locked product sale price will be marked as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->lockProductSalePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->lockProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockProductSalePrice()`

```php
unlockProductSalePrice($productRef, $priceId, $domain): string
```

Unlock a product sale price

A locked product sale price will be marked as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->unlockProductSalePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->unlockProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductSalePrice()`

```php
updateProductSalePrice($productRef, $priceId, $domain, $productSalePriceUpdate): string
```

Update a product sale price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductSalePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productSalePriceUpdate = new \SynergiTech\Iplicit\Model\ProductSalePriceUpdate(); // \SynergiTech\Iplicit\Model\ProductSalePriceUpdate |

try {
    $result = $apiInstance->updateProductSalePrice($productRef, $priceId, $domain, $productSalePriceUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalePriceApi->updateProductSalePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productSalePriceUpdate** | [**\SynergiTech\Iplicit\Model\ProductSalePriceUpdate**](../Model/ProductSalePriceUpdate.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
