# SynergiTech\Iplicit\ProductPurchasePriceApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductPurchasePrice()**](ProductPurchasePriceApi.md#createProductPurchasePrice) | **POST** /api/Product/{productRef}/PurchasePrice | Create a product purchase price |
| [**deleteProductPurchasePrice()**](ProductPurchasePriceApi.md#deleteProductPurchasePrice) | **DELETE** /api/Product/{productRef}/PurchasePrice/{priceId} | Delete a product purchase price |
| [**getProductPurchasePrice()**](ProductPurchasePriceApi.md#getProductPurchasePrice) | **GET** /api/Product/{productRef}/PurchasePrice/{priceId} | Get a product purchase price from priceId |
| [**getProductPurchasePrices()**](ProductPurchasePriceApi.md#getProductPurchasePrices) | **GET** /api/Product/{productRef}/PurchasePrice | Get all product purchase prices for productRef |
| [**lockProductPurchasePrice()**](ProductPurchasePriceApi.md#lockProductPurchasePrice) | **POST** /api/Product/{productRef}/PurchasePrice/{priceId}/lock | Lock a product purchase price |
| [**unlockProductPurchasePrice()**](ProductPurchasePriceApi.md#unlockProductPurchasePrice) | **POST** /api/Product/{productRef}/PurchasePrice/{priceId}/unlock | Unlock a product purchase price |
| [**updateProductPurchasePrice()**](ProductPurchasePriceApi.md#updateProductPurchasePrice) | **PATCH** /api/Product/{productRef}/PurchasePrice/{priceId} | Update a product purchase price |


## `createProductPurchasePrice()`

```php
createProductPurchasePrice($productRef, $domain, $productPurchasePriceCreate): string
```

Create a product purchase price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productPurchasePriceCreate = new \SynergiTech\Iplicit\Model\ProductPurchasePriceCreate(); // \SynergiTech\Iplicit\Model\ProductPurchasePriceCreate |

try {
    $result = $apiInstance->createProductPurchasePrice($productRef, $domain, $productPurchasePriceCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->createProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productPurchasePriceCreate** | [**\SynergiTech\Iplicit\Model\ProductPurchasePriceCreate**](../Model/ProductPurchasePriceCreate.md)|  | [optional] |

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

## `deleteProductPurchasePrice()`

```php
deleteProductPurchasePrice($productRef, $priceId, $domain): string
```

Delete a product purchase price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->deleteProductPurchasePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->deleteProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
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

## `getProductPurchasePrice()`

```php
getProductPurchasePrice($productRef, $priceId, $domain): \SynergiTech\Iplicit\Model\ProductPurchasePriceRead
```

Get a product purchase price from priceId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getProductPurchasePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->getProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ProductPurchasePriceRead**](../Model/ProductPurchasePriceRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductPurchasePrices()`

```php
getProductPurchasePrices($productRef, $domain): \SynergiTech\Iplicit\Model\ProductPurchasePriceRead[]
```

Get all product purchase prices for productRef

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getProductPurchasePrices($productRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->getProductPurchasePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ProductPurchasePriceRead[]**](../Model/ProductPurchasePriceRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockProductPurchasePrice()`

```php
lockProductPurchasePrice($productRef, $priceId, $domain): string
```

Lock a product purchase price

A locked product purchase price will be marked as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->lockProductPurchasePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->lockProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
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

## `unlockProductPurchasePrice()`

```php
unlockProductPurchasePrice($productRef, $priceId, $domain): string
```

Unlock a product purchase price

A locked product purcgase price will be marked as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->unlockProductPurchasePrice($productRef, $priceId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->unlockProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
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

## `updateProductPurchasePrice()`

```php
updateProductPurchasePrice($productRef, $priceId, $domain, $productPurchasePriceUpdate): string
```

Update a product purchase price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductPurchasePriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$productRef = 'productRef_example'; // string | Id or code of the product
$priceId = 'priceId_example'; // string | Id of the product price
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productPurchasePriceUpdate = new \SynergiTech\Iplicit\Model\ProductPurchasePriceUpdate(); // \SynergiTech\Iplicit\Model\ProductPurchasePriceUpdate |

try {
    $result = $apiInstance->updateProductPurchasePrice($productRef, $priceId, $domain, $productPurchasePriceUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPurchasePriceApi->updateProductPurchasePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productRef** | **string**| Id or code of the product | |
| **priceId** | **string**| Id of the product price | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productPurchasePriceUpdate** | [**\SynergiTech\Iplicit\Model\ProductPurchasePriceUpdate**](../Model/ProductPurchasePriceUpdate.md)|  | [optional] |

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
