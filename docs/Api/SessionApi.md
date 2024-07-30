# SynergiTech\Iplicit\SessionApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeSession()**](SessionApi.md#closeSession) | **POST** /api/Session/close | Close the session |
| [**createSessionAPIKey()**](SessionApi.md#createSessionAPIKey) | **POST** /api/Session/create/api | Create a session with an API Key. |


## `closeSession()`

```php
closeSession()
```

Close the session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);

try {
    $apiInstance->closeSession();
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->closeSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `createSessionAPIKey()`

```php
createSessionAPIKey($loginApiCredentials): \SynergiTech\Iplicit\Model\SessionResultData
```

Create a session with an API Key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$loginApiCredentials = new \SynergiTech\Iplicit\Model\LoginApiCredentials(); // \SynergiTech\Iplicit\Model\LoginApiCredentials

try {
    $result = $apiInstance->createSessionAPIKey($loginApiCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSessionAPIKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginApiCredentials** | [**\SynergiTech\Iplicit\Model\LoginApiCredentials**](../Model/LoginApiCredentials.md)|  | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\SessionResultData**](../Model/SessionResultData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
