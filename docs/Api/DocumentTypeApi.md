# SynergiTech\Iplicit\DocumentTypeApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDocumentType()**](DocumentTypeApi.md#getDocumentType) | **GET** /api/DocumentType/{documentTypeRef} | Get a document type |


## `getDocumentType()`

```php
getDocumentType($documentTypeRef, $domain, $include): \SynergiTech\Iplicit\Model\DocumentTypeRead
```

Get a document type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DocumentTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$documentTypeRef = 'documentTypeRef_example'; // string | Id or code of the document type
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$include = ''; // string | Additional detail to include.  Valid options are `doctypesetup`. If omitted, will not show additional detail.

try {
    $result = $apiInstance->getDocumentType($documentTypeRef, $domain, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypeApi->getDocumentType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentTypeRef** | **string**| Id or code of the document type | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **include** | **string**| Additional detail to include.  Valid options are &#x60;doctypesetup&#x60;. If omitted, will not show additional detail. | [optional] [default to &#39;&#39;] |

### Return type

[**\SynergiTech\Iplicit\Model\DocumentTypeRead**](../Model/DocumentTypeRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
