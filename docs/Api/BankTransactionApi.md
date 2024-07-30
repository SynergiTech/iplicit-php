# SynergiTech\Iplicit\BankTransactionApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBankTransaction()**](BankTransactionApi.md#createBankTransaction) | **POST** /api/BankTransaction | Create a bank transaction |
| [**deleteBankTransaction()**](BankTransactionApi.md#deleteBankTransaction) | **DELETE** /api/BankTransaction/{bankTransactionId} | Delete a bank transaction |
| [**getBankTransaction()**](BankTransactionApi.md#getBankTransaction) | **GET** /api/BankTransaction/{bankTransactionId} | Get a bank transaction |
| [**lockBankTransaction()**](BankTransactionApi.md#lockBankTransaction) | **POST** /api/BankTransaction/{bankTransactionId}/lock | Lock a bank transaction |
| [**unlockBankTransaction()**](BankTransactionApi.md#unlockBankTransaction) | **POST** /api/BankTransaction/{bankTransactionId}/unlock | Unlock a bank transaction |
| [**updateBankTransaction()**](BankTransactionApi.md#updateBankTransaction) | **PATCH** /api/BankTransaction/{bankTransactionId} | Update a bank transaction |


## `createBankTransaction()`

```php
createBankTransaction($bankTransactionCreate): string
```

Create a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionCreate = new \SynergiTech\Iplicit\Model\BankTransactionCreate(); // \SynergiTech\Iplicit\Model\BankTransactionCreate |

try {
    $result = $apiInstance->createBankTransaction($bankTransactionCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->createBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionCreate** | [**\SynergiTech\Iplicit\Model\BankTransactionCreate**](../Model/BankTransactionCreate.md)|  | [optional] |

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

## `deleteBankTransaction()`

```php
deleteBankTransaction($bankTransactionId): string
```

Delete a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionId = 'bankTransactionId_example'; // string | Id of the bank transaction

try {
    $result = $apiInstance->deleteBankTransaction($bankTransactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->deleteBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionId** | **string**| Id of the bank transaction | |

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

## `getBankTransaction()`

```php
getBankTransaction($bankTransactionId): \SynergiTech\Iplicit\Model\BankTransactionRead
```

Get a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionId = 'bankTransactionId_example'; // string | Id of the bank transaction

try {
    $result = $apiInstance->getBankTransaction($bankTransactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->getBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionId** | **string**| Id of the bank transaction | |

### Return type

[**\SynergiTech\Iplicit\Model\BankTransactionRead**](../Model/BankTransactionRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockBankTransaction()`

```php
lockBankTransaction($bankTransactionId): string
```

Lock a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionId = 'bankTransactionId_example'; // string | Id of the bank transaction

try {
    $result = $apiInstance->lockBankTransaction($bankTransactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->lockBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionId** | **string**| Id of the bank transaction | |

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

## `unlockBankTransaction()`

```php
unlockBankTransaction($bankTransactionId): string
```

Unlock a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionId = 'bankTransactionId_example'; // string | Id of the bank transaction

try {
    $result = $apiInstance->unlockBankTransaction($bankTransactionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->unlockBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionId** | **string**| Id of the bank transaction | |

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

## `updateBankTransaction()`

```php
updateBankTransaction($bankTransactionId, $bankTransactionUpdate): string
```

Update a bank transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BankTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$bankTransactionId = 'bankTransactionId_example'; // string | Id of the bank transaction
$bankTransactionUpdate = new \SynergiTech\Iplicit\Model\BankTransactionUpdate(); // \SynergiTech\Iplicit\Model\BankTransactionUpdate |

try {
    $result = $apiInstance->updateBankTransaction($bankTransactionId, $bankTransactionUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransactionApi->updateBankTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransactionId** | **string**| Id of the bank transaction | |
| **bankTransactionUpdate** | [**\SynergiTech\Iplicit\Model\BankTransactionUpdate**](../Model/BankTransactionUpdate.md)|  | [optional] |

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
