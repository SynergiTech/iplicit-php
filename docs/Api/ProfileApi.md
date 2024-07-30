# SynergiTech\Iplicit\ProfileApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfile()**](ProfileApi.md#getProfile) | **GET** /api/Profile | Get profile of current session |


## `getProfile()`

```php
getProfile(): \SynergiTech\Iplicit\Model\ProfileRead
```

Get profile of current session

Can be used to test authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);

try {
    $result = $apiInstance->getProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Iplicit\Model\ProfileRead**](../Model/ProfileRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
