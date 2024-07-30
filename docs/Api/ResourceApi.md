# SynergiTech\Iplicit\ResourceApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getResource()**](ResourceApi.md#getResource) | **GET** /api/Resource/{id} | Get a resource |


## `getResource()`

```php
getResource($id): \SynergiTech\Iplicit\Model\ResourceRead
```

Get a resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the resource

try {
    $result = $apiInstance->getResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the resource | |

### Return type

[**\SynergiTech\Iplicit\Model\ResourceRead**](../Model/ResourceRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
