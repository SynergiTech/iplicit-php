# SynergiTech\Iplicit\CostCentreApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCostCentre()**](CostCentreApi.md#createCostCentre) | **POST** /api/CostCentre | Create a cost centre |
| [**getCostCentre()**](CostCentreApi.md#getCostCentre) | **GET** /api/CostCentre/{costCentreRef} | Get a cost centre |
| [**getCostCentres()**](CostCentreApi.md#getCostCentres) | **GET** /api/CostCentre | Get a list of cost centres with a search filter |
| [**lockCostCentre()**](CostCentreApi.md#lockCostCentre) | **POST** /api/CostCentre/{costCentreRef}/lock | Lock the cost centre |
| [**unlockCostCentre()**](CostCentreApi.md#unlockCostCentre) | **POST** /api/CostCentre/{costCentreRef}/unlock | Unlock the cost centre |
| [**updateCostCentre()**](CostCentreApi.md#updateCostCentre) | **PATCH** /api/CostCentre/{costCentreRef} | Update a cost centre |


## `createCostCentre()`

```php
createCostCentre($costCentreCreate): string
```

Create a cost centre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$costCentreCreate = new \SynergiTech\Iplicit\Model\CostCentreCreate(); // \SynergiTech\Iplicit\Model\CostCentreCreate |

try {
    $result = $apiInstance->createCostCentre($costCentreCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->createCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **costCentreCreate** | [**\SynergiTech\Iplicit\Model\CostCentreCreate**](../Model/CostCentreCreate.md)|  | [optional] |

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

## `getCostCentre()`

```php
getCostCentre($costCentreRef, $include): \SynergiTech\Iplicit\Model\CostCentreRead
```

Get a cost centre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$costCentreRef = 'costCentreRef_example'; // string | Id or code of the cost centre
$include = 'include_example'; // string | Comma separated list of detail to include: `resources`, `subCostCentres`. Default is no detail returned.

try {
    $result = $apiInstance->getCostCentre($costCentreRef, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->getCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **costCentreRef** | **string**| Id or code of the cost centre | |
| **include** | **string**| Comma separated list of detail to include: &#x60;resources&#x60;, &#x60;subCostCentres&#x60;. Default is no detail returned. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\CostCentreRead**](../Model/CostCentreRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCentres()`

```php
getCostCentres($descriptionContains, $codeContains, $parentCostCentre, $legalEntity, $isActive, $includeClosed, $take, $skip): \SynergiTech\Iplicit\Model\CostCentreSearch[]
```

Get a list of cost centres with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$descriptionContains = 'descriptionContains_example'; // string | Use to only search cost centres where the description contains the text
$codeContains = 'codeContains_example'; // string | Use to only search cost centres where the code contains the text
$parentCostCentre = 'parentCostCentre_example'; // string | Use to only search cost centres with the parent cost centre. Accepts id or code.
$legalEntity = 'legalEntity_example'; // string | Use to only search cost centres with the legal entity. Accepts id or code.
$isActive = True; // bool | Use to only search cost centres with the active state
$includeClosed = True; // bool | Use to only search cost centres with the open state
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getCostCentres($descriptionContains, $codeContains, $parentCostCentre, $legalEntity, $isActive, $includeClosed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->getCostCentres: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **descriptionContains** | **string**| Use to only search cost centres where the description contains the text | [optional] |
| **codeContains** | **string**| Use to only search cost centres where the code contains the text | [optional] |
| **parentCostCentre** | **string**| Use to only search cost centres with the parent cost centre. Accepts id or code. | [optional] |
| **legalEntity** | **string**| Use to only search cost centres with the legal entity. Accepts id or code. | [optional] |
| **isActive** | **bool**| Use to only search cost centres with the active state | [optional] |
| **includeClosed** | **bool**| Use to only search cost centres with the open state | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\CostCentreSearch[]**](../Model/CostCentreSearch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockCostCentre()`

```php
lockCostCentre($costCentreRef): string
```

Lock the cost centre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$costCentreRef = 'costCentreRef_example'; // string | Id or code of the cost centre

try {
    $result = $apiInstance->lockCostCentre($costCentreRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->lockCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **costCentreRef** | **string**| Id or code of the cost centre | |

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

## `unlockCostCentre()`

```php
unlockCostCentre($costCentreRef): string
```

Unlock the cost centre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$costCentreRef = 'costCentreRef_example'; // string | `Id` or `Code` of the cost centre

try {
    $result = $apiInstance->unlockCostCentre($costCentreRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->unlockCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **costCentreRef** | **string**| &#x60;Id&#x60; or &#x60;Code&#x60; of the cost centre | |

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

## `updateCostCentre()`

```php
updateCostCentre($costCentreRef, $costCentreUpdate): string
```

Update a cost centre

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$costCentreRef = 'costCentreRef_example'; // string | Id or code of the cost centre
$costCentreUpdate = new \SynergiTech\Iplicit\Model\CostCentreUpdate(); // \SynergiTech\Iplicit\Model\CostCentreUpdate |

try {
    $result = $apiInstance->updateCostCentre($costCentreRef, $costCentreUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->updateCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **costCentreRef** | **string**| Id or code of the cost centre | |
| **costCentreUpdate** | [**\SynergiTech\Iplicit\Model\CostCentreUpdate**](../Model/CostCentreUpdate.md)|  | [optional] |

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
