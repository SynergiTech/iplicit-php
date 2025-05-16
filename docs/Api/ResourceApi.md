# SynergiTech\Iplicit\ResourceApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getResource()**](ResourceApi.md#getResource) | **GET** /api/Resource/{id} | Get a resource |


## `getResource()`

```php
getResource($id, $domain): \SynergiTech\Iplicit\Model\ResourceRead
```

Get a resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the resource
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getResource($id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourceApi->getResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the resource | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ResourceRead**](../Model/ResourceRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
