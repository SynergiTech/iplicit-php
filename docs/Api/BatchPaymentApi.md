# SynergiTech\Iplicit\BatchPaymentApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**abandonBatchPayment()**](BatchPaymentApi.md#abandonBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/abandon | Abandon a batch payment |
| [**addBatchPaymentAllocations()**](BatchPaymentApi.md#addBatchPaymentAllocations) | **POST** /api/BatchPayment/{idOrBatchNo}/allocations | Add allocations to the batch payment |
| [**amendBatchPayment()**](BatchPaymentApi.md#amendBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/amend | Set an approved batch payment back to draft for amending |
| [**createBatchPayment()**](BatchPaymentApi.md#createBatchPayment) | **POST** /api/BatchPayment | Create a batch payment |
| [**deleteBatchPaymentAllocation()**](BatchPaymentApi.md#deleteBatchPaymentAllocation) | **DELETE** /api/BatchPayment/{idOrBatchNo}/allocations/{allocationId} | Delete an allocation in the batch payment |
| [**getBatchPayment()**](BatchPaymentApi.md#getBatchPayment) | **GET** /api/BatchPayment/{idOrBatchNo} | Get a batch payment by id or by batch number. |
| [**getBatchPayments()**](BatchPaymentApi.md#getBatchPayments) | **GET** /api/BatchPayment | Get batch payments with a search filter |
| [**postBatchPayment()**](BatchPaymentApi.md#postBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/post | Post a batch payment |
| [**processBatchPayment()**](BatchPaymentApi.md#processBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/process | Process a batch payment |
| [**replaceBatchPaymentAllocations()**](BatchPaymentApi.md#replaceBatchPaymentAllocations) | **PUT** /api/BatchPayment/{idOrBatchNo}/allocations | Replaces all allocations in the batch payment |
| [**submitBatchPayment()**](BatchPaymentApi.md#submitBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/submit | Submit a batch payment |
| [**unpostBatchPayment()**](BatchPaymentApi.md#unpostBatchPayment) | **POST** /api/BatchPayment/{idOrBatchNo}/unpost | Unpost a batch payment |
| [**updateBatchPayment()**](BatchPaymentApi.md#updateBatchPayment) | **PATCH** /api/BatchPayment/{batchPaymentId} | Update a batch payment |


## `abandonBatchPayment()`

```php
abandonBatchPayment($idOrBatchNo, $batchPaymentAbandon): string
```

Abandon a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number
$batchPaymentAbandon = new \SynergiTech\Iplicit\Model\BatchPaymentAbandon(); // \SynergiTech\Iplicit\Model\BatchPaymentAbandon

try {
    $result = $apiInstance->abandonBatchPayment($idOrBatchNo, $batchPaymentAbandon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->abandonBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |
| **batchPaymentAbandon** | [**\SynergiTech\Iplicit\Model\BatchPaymentAbandon**](../Model/BatchPaymentAbandon.md)|  | [optional] |

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

## `addBatchPaymentAllocations()`

```php
addBatchPaymentAllocations($idOrBatchNo, $docAllocationCreate)
```

Add allocations to the batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number
$docAllocationCreate = array(new \SynergiTech\Iplicit\Model\DocAllocationCreate()); // \SynergiTech\Iplicit\Model\DocAllocationCreate[] |

try {
    $apiInstance->addBatchPaymentAllocations($idOrBatchNo, $docAllocationCreate);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->addBatchPaymentAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |
| **docAllocationCreate** | [**\SynergiTech\Iplicit\Model\DocAllocationCreate[]**](../Model/DocAllocationCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `amendBatchPayment()`

```php
amendBatchPayment($idOrBatchNo): string
```

Set an approved batch payment back to draft for amending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->amendBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->amendBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

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

## `createBatchPayment()`

```php
createBatchPayment($batchPaymentCreate): string
```

Create a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$batchPaymentCreate = new \SynergiTech\Iplicit\Model\BatchPaymentCreate(); // \SynergiTech\Iplicit\Model\BatchPaymentCreate |

try {
    $result = $apiInstance->createBatchPayment($batchPaymentCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->createBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batchPaymentCreate** | [**\SynergiTech\Iplicit\Model\BatchPaymentCreate**](../Model/BatchPaymentCreate.md)|  | [optional] |

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

## `deleteBatchPaymentAllocation()`

```php
deleteBatchPaymentAllocation($idOrBatchNo, $allocationId)
```

Delete an allocation in the batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number
$allocationId = 'allocationId_example'; // string | Batch payment allocation id

try {
    $apiInstance->deleteBatchPaymentAllocation($idOrBatchNo, $allocationId);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->deleteBatchPaymentAllocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |
| **allocationId** | **string**| Batch payment allocation id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchPayment()`

```php
getBatchPayment($idOrBatchNo): \SynergiTech\Iplicit\Model\BatchPaymentDetail
```

Get a batch payment by id or by batch number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->getBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->getBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

### Return type

[**\SynergiTech\Iplicit\Model\BatchPaymentDetail**](../Model/BatchPaymentDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBatchPayments()`

```php
getBatchPayments($batchNo, $batchPaymentType, $legalEntity, $bankAccountId, $description, $descriptionContains, $paymentDateFrom, $paymentDateTo, $lastModifiedFrom, $lastModifiedTo, $lastModifiedBy, $isDraft, $isPosted, $isApproved, $isProcessed, $take, $skip): \SynergiTech\Iplicit\Model\BatchPaymentSummary[]
```

Get batch payments with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$batchNo = 'batchNo_example'; // string | Filter on the batch payment number
$batchPaymentType = 'batchPaymentType_example'; // string | Filter on the batch payment type
$legalEntity = 'legalEntity_example'; // string | Filter on the legal entity
$bankAccountId = 'bankAccountId_example'; // string | Filter on the bank account id
$description = 'description_example'; // string | Filter on the description
$descriptionContains = 'descriptionContains_example'; // string | Filter on the description that contains
$paymentDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The batch payment date from
$paymentDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the batch payment date to
$lastModifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the batch payment last modified from date
$lastModifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the batch payment last modified to date
$lastModifiedBy = 'lastModifiedBy_example'; // string | The user that last modified this item. See `UserAccount` catalog.
$isDraft = True; // bool | Filter on a flag indicating whether the batch is in draft
$isPosted = True; // bool | Filter on a flag indicating whether the batch is posted
$isApproved = True; // bool | Filter on a flag indicating whether the batch is approved
$isProcessed = True; // bool | Filter on a flag indicating whether the batch is processed
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getBatchPayments($batchNo, $batchPaymentType, $legalEntity, $bankAccountId, $description, $descriptionContains, $paymentDateFrom, $paymentDateTo, $lastModifiedFrom, $lastModifiedTo, $lastModifiedBy, $isDraft, $isPosted, $isApproved, $isProcessed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->getBatchPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batchNo** | **string**| Filter on the batch payment number | [optional] |
| **batchPaymentType** | **string**| Filter on the batch payment type | [optional] |
| **legalEntity** | **string**| Filter on the legal entity | [optional] |
| **bankAccountId** | **string**| Filter on the bank account id | [optional] |
| **description** | **string**| Filter on the description | [optional] |
| **descriptionContains** | **string**| Filter on the description that contains | [optional] |
| **paymentDateFrom** | **\DateTime**| The batch payment date from | [optional] |
| **paymentDateTo** | **\DateTime**| Filter on the batch payment date to | [optional] |
| **lastModifiedFrom** | **\DateTime**| Filter on the batch payment last modified from date | [optional] |
| **lastModifiedTo** | **\DateTime**| Filter on the batch payment last modified to date | [optional] |
| **lastModifiedBy** | **string**| The user that last modified this item. See &#x60;UserAccount&#x60; catalog. | [optional] |
| **isDraft** | **bool**| Filter on a flag indicating whether the batch is in draft | [optional] |
| **isPosted** | **bool**| Filter on a flag indicating whether the batch is posted | [optional] |
| **isApproved** | **bool**| Filter on a flag indicating whether the batch is approved | [optional] |
| **isProcessed** | **bool**| Filter on a flag indicating whether the batch is processed | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\BatchPaymentSummary[]**](../Model/BatchPaymentSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBatchPayment()`

```php
postBatchPayment($idOrBatchNo): string
```

Post a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->postBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->postBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

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

## `processBatchPayment()`

```php
processBatchPayment($idOrBatchNo): string
```

Process a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->processBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->processBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

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

## `replaceBatchPaymentAllocations()`

```php
replaceBatchPaymentAllocations($idOrBatchNo, $docAllocationCreate)
```

Replaces all allocations in the batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number
$docAllocationCreate = array(new \SynergiTech\Iplicit\Model\DocAllocationCreate()); // \SynergiTech\Iplicit\Model\DocAllocationCreate[] |

try {
    $apiInstance->replaceBatchPaymentAllocations($idOrBatchNo, $docAllocationCreate);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->replaceBatchPaymentAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |
| **docAllocationCreate** | [**\SynergiTech\Iplicit\Model\DocAllocationCreate[]**](../Model/DocAllocationCreate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitBatchPayment()`

```php
submitBatchPayment($idOrBatchNo): string
```

Submit a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->submitBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->submitBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

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

## `unpostBatchPayment()`

```php
unpostBatchPayment($idOrBatchNo): string
```

Unpost a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch payment id or batch number

try {
    $result = $apiInstance->unpostBatchPayment($idOrBatchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->unpostBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch payment id or batch number | |

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

## `updateBatchPayment()`

```php
updateBatchPayment($batchPaymentId, $batchPaymentUpdate)
```

Update a batch payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\BatchPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$batchPaymentId = 'batchPaymentId_example'; // string | Batch payment id
$batchPaymentUpdate = new \SynergiTech\Iplicit\Model\BatchPaymentUpdate(); // \SynergiTech\Iplicit\Model\BatchPaymentUpdate |

try {
    $apiInstance->updateBatchPayment($batchPaymentId, $batchPaymentUpdate);
} catch (Exception $e) {
    echo 'Exception when calling BatchPaymentApi->updateBatchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batchPaymentId** | **string**| Batch payment id | |
| **batchPaymentUpdate** | [**\SynergiTech\Iplicit\Model\BatchPaymentUpdate**](../Model/BatchPaymentUpdate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
