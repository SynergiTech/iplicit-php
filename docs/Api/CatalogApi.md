# SynergiTech\Iplicit\CatalogApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCatalogItem()**](CatalogApi.md#addCatalogItem) | **PUT** /api/Catalog/{catalogName} | Add an item to a catalog |
| [**deleteCatalogItem()**](CatalogApi.md#deleteCatalogItem) | **DELETE** /api/Catalog/{catalogName}/{idOrCode} | Delete an item in a catalog |
| [**getAllCatalogs()**](CatalogApi.md#getAllCatalogs) | **GET** /api/Catalog | Get a list of all catalogs |
| [**getCatalog()**](CatalogApi.md#getCatalog) | **GET** /api/Catalog/{catalogName} | Get all items in a catalog |
| [**lockCatalogItem()**](CatalogApi.md#lockCatalogItem) | **POST** /api/Catalog/{catalogName}/{idOrCode}/lock | Lock a catalog item |
| [**replaceCatalogItems()**](CatalogApi.md#replaceCatalogItems) | **POST** /api/Catalog/{catalogName} | Replace all items in a catalog |
| [**unlockCatalogItem()**](CatalogApi.md#unlockCatalogItem) | **POST** /api/Catalog/{catalogName}/{idOrCode}/unlock | Unlock a catalog item |
| [**updateCatalogItem()**](CatalogApi.md#updateCatalogItem) | **PATCH** /api/Catalog/{catalogName}/{idOrCode} | Update an item in a catalog |


## `addCatalogItem()`

```php
addCatalogItem($catalogName, $domain, $catalogItemCreate)
```

Add an item to a catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$catalogItemCreate = new \SynergiTech\Iplicit\Model\CatalogItemCreate(); // \SynergiTech\Iplicit\Model\CatalogItemCreate |

try {
    $apiInstance->addCatalogItem($catalogName, $domain, $catalogItemCreate);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->addCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **catalogItemCreate** | [**\SynergiTech\Iplicit\Model\CatalogItemCreate**](../Model/CatalogItemCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCatalogItem()`

```php
deleteCatalogItem($catalogName, $idOrCode, $domain)
```

Delete an item in a catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog
$idOrCode = 'idOrCode_example'; // string | Id or code of the catalog item
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->deleteCatalogItem($catalogName, $idOrCode, $domain);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->deleteCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog | |
| **idOrCode** | **string**| Id or code of the catalog item | |
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

## `getAllCatalogs()`

```php
getAllCatalogs($domain): \SynergiTech\Iplicit\Model\CatalogItem[]
```

Get a list of all catalogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getAllCatalogs($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getAllCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\CatalogItem[]**](../Model/CatalogItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCatalog()`

```php
getCatalog($catalogName, $domain): \SynergiTech\Iplicit\Model\CatalogItem[]
```

Get all items in a catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getCatalog($catalogName, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\CatalogItem[]**](../Model/CatalogItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockCatalogItem()`

```php
lockCatalogItem($catalogName, $idOrCode, $domain, $catalogItem)
```

Lock a catalog item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog to update
$idOrCode = 'idOrCode_example'; // string | Id or code of the catalog item
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$catalogItem = new \SynergiTech\Iplicit\Model\CatalogItem(); // \SynergiTech\Iplicit\Model\CatalogItem |

try {
    $apiInstance->lockCatalogItem($catalogName, $idOrCode, $domain, $catalogItem);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->lockCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog to update | |
| **idOrCode** | **string**| Id or code of the catalog item | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **catalogItem** | [**\SynergiTech\Iplicit\Model\CatalogItem**](../Model/CatalogItem.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceCatalogItems()`

```php
replaceCatalogItems($catalogName, $domain, $catalogItemCreate)
```

Replace all items in a catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$catalogItemCreate = array(new \SynergiTech\Iplicit\Model\CatalogItemCreate()); // \SynergiTech\Iplicit\Model\CatalogItemCreate[] |

try {
    $apiInstance->replaceCatalogItems($catalogName, $domain, $catalogItemCreate);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->replaceCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **catalogItemCreate** | [**\SynergiTech\Iplicit\Model\CatalogItemCreate[]**](../Model/CatalogItemCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockCatalogItem()`

```php
unlockCatalogItem($catalogName, $idOrCode, $domain, $catalogItem)
```

Unlock a catalog item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog to update
$idOrCode = 'idOrCode_example'; // string | Id or code of the catalog item
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$catalogItem = new \SynergiTech\Iplicit\Model\CatalogItem(); // \SynergiTech\Iplicit\Model\CatalogItem |

try {
    $apiInstance->unlockCatalogItem($catalogName, $idOrCode, $domain, $catalogItem);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->unlockCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog to update | |
| **idOrCode** | **string**| Id or code of the catalog item | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **catalogItem** | [**\SynergiTech\Iplicit\Model\CatalogItem**](../Model/CatalogItem.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCatalogItem()`

```php
updateCatalogItem($catalogName, $idOrCode, $domain, $catalogItemUpdate)
```

Update an item in a catalog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$catalogName = 'catalogName_example'; // string | Name of the catalog
$idOrCode = 'idOrCode_example'; // string | Id or code of the catalog item
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$catalogItemUpdate = new \SynergiTech\Iplicit\Model\CatalogItemUpdate(); // \SynergiTech\Iplicit\Model\CatalogItemUpdate |

try {
    $apiInstance->updateCatalogItem($catalogName, $idOrCode, $domain, $catalogItemUpdate);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->updateCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalogName** | **string**| Name of the catalog | |
| **idOrCode** | **string**| Id or code of the catalog item | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **catalogItemUpdate** | [**\SynergiTech\Iplicit\Model\CatalogItemUpdate**](../Model/CatalogItemUpdate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
