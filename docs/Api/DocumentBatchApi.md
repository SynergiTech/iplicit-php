# SynergiTech\Iplicit\DocumentBatchApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**unpostDocumentBatch()**](DocumentBatchApi.md#unpostDocumentBatch) | **POST** /api/DocumentBatch/{idOrBatchNo}/unpost | Unpost a document |


## `unpostDocumentBatch()`

```php
unpostDocumentBatch($idOrBatchNo, $domain): string
```

Unpost a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DocumentBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrBatchNo = 'idOrBatchNo_example'; // string | Batch id or Batch number.
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->unpostDocumentBatch($idOrBatchNo, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBatchApi->unpostDocumentBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrBatchNo** | **string**| Batch id or Batch number. | |
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
