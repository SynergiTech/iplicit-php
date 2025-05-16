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
createProduct($domain, $productCreate): string
```

Create a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productCreate = new \SynergiTech\Iplicit\Model\ProductCreate(); // \SynergiTech\Iplicit\Model\ProductCreate |

try {
    $result = $apiInstance->createProduct($domain, $productCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productCreate** | [**\SynergiTech\Iplicit\Model\ProductCreate**](../Model/ProductCreate.md)|  | [optional] |

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

## `deleteProduct()`

```php
deleteProduct($id, $domain)
```

Permanently delete a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->deleteProduct($id, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($idOrCode, $domain, $include): \SynergiTech\Iplicit\Model\ProductRead
```

Get a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrCode = 'idOrCode_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$include = 'include_example'; // string | Comma separated list of details to include: `ext`.

try {
    $result = $apiInstance->getProduct($idOrCode, $domain, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrCode** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **include** | **string**| Comma separated list of details to include: &#x60;ext&#x60;. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\ProductRead**](../Model/ProductRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($domain, $descriptionContains, $productGroupId, $isPurchase, $isSale, $lastModifiedFrom, $lastModifiedTo, $take, $skip): \SynergiTech\Iplicit\Model\ProductSummary[]
```

Get a list of products with a search filter

The results are paginated using the !:skip and !:take parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$descriptionContains = 'descriptionContains_example'; // string | The product description contains
$productGroupId = 'productGroupId_example'; // string | The product group id
$isPurchase = True; // bool | The product purchase flag
$isSale = True; // bool | The product sale flag
$lastModifiedFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The product last modified from date
$lastModifiedTo = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The product last modified to date
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getProducts($domain, $descriptionContains, $productGroupId, $isPurchase, $isSale, $lastModifiedFrom, $lastModifiedTo, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **descriptionContains** | **string**| The product description contains | [optional] |
| **productGroupId** | **string**| The product group id | [optional] |
| **isPurchase** | **bool**| The product purchase flag | [optional] |
| **isSale** | **bool**| The product sale flag | [optional] |
| **lastModifiedFrom** | **\DateTime**| The product last modified from date | [optional] |
| **lastModifiedTo** | **\DateTime**| The product last modified to date | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\ProductSummary[]**](../Model/ProductSummary.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockProduct()`

```php
lockProduct($id, $domain): string
```

Lock a product

A locked product will mark all aspects (sale, purchase, etc) as inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->lockProduct($id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->lockProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the product | |
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

## `updateProduct()`

```php
updateProduct($idOrCode, $domain, $productUpdate): string
```

Update a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrCode = 'idOrCode_example'; // string | Id or code of the product
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$productUpdate = new \SynergiTech\Iplicit\Model\ProductUpdate(); // \SynergiTech\Iplicit\Model\ProductUpdate |

try {
    $result = $apiInstance->updateProduct($idOrCode, $domain, $productUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrCode** | **string**| Id or code of the product | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **productUpdate** | [**\SynergiTech\Iplicit\Model\ProductUpdate**](../Model/ProductUpdate.md)|  | [optional] |

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
