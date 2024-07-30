# SynergiTech\Iplicit\EnquiryApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**runEnquiry()**](EnquiryApi.md#runEnquiry) | **POST** /api/Enquiry/run/{id} | Run an enquiry that returns a list |
| [**runEnquiryToList()**](EnquiryApi.md#runEnquiryToList) | **POST** /api/Enquiry/run/{id}/list | Run an enquiry that returns a list |
| [**runEnquiryToTable()**](EnquiryApi.md#runEnquiryToTable) | **POST** /api/Enquiry/run/{id}/table | Run an enquiry that returns a table |


## `runEnquiry()`

```php
runEnquiry($id, $body): mixed[]
```

Run an enquiry that returns a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\EnquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the enquiry
$body = NULL; // mixed

try {
    $result = $apiInstance->runEnquiry($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiryApi->runEnquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the enquiry | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runEnquiryToList()`

```php
runEnquiryToList($id, $body): mixed[]
```

Run an enquiry that returns a list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\EnquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the enquiry
$body = NULL; // mixed

try {
    $result = $apiInstance->runEnquiryToList($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiryApi->runEnquiryToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the enquiry | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runEnquiryToTable()`

```php
runEnquiryToTable($id, $body): \SynergiTech\Iplicit\Model\Table
```

Run an enquiry that returns a table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\EnquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the enquiry
$body = NULL; // mixed

try {
    $result = $apiInstance->runEnquiryToTable($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiryApi->runEnquiryToTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the enquiry | |
| **body** | **mixed**|  | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\Table**](../Model/Table.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
