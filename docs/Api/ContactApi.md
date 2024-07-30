# SynergiTech\Iplicit\ContactApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactApi.md#createContact) | **POST** /api/Contact | Create a contact |
| [**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /api/Contact/{idOrIntRef} | Delete a contact |
| [**getContact()**](ContactApi.md#getContact) | **GET** /api/Contact/{idOrIntRef} | Get a contact |
| [**lockContact()**](ContactApi.md#lockContact) | **POST** /api/Contact/{idOrIntRef}/lock | Lock the contact |
| [**unlockContact()**](ContactApi.md#unlockContact) | **POST** /api/Contact/{idOrIntRef}/unlock | Unlock the contact |
| [**updateContact()**](ContactApi.md#updateContact) | **PATCH** /api/Contact/{idOrIntRef} | Update a contact |


## `createContact()`

```php
createContact($contactCreate): string
```

Create a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$contactCreate = new \SynergiTech\Iplicit\Model\ContactCreate(); // \SynergiTech\Iplicit\Model\ContactCreate

try {
    $result = $apiInstance->createContact($contactCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactCreate** | [**\SynergiTech\Iplicit\Model\ContactCreate**](../Model/ContactCreate.md)|  | [optional] |

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

## `deleteContact()`

```php
deleteContact($idOrIntRef)
```

Delete a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $apiInstance->deleteContact($idOrIntRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

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

## `getContact()`

```php
getContact($idOrIntRef): \SynergiTech\Iplicit\Model\ContactRead
```

Get a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $result = $apiInstance->getContact($idOrIntRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactRead**](../Model/ContactRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockContact()`

```php
lockContact($idOrIntRef)
```

Lock the contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $apiInstance->lockContact($idOrIntRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->lockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

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

## `unlockContact()`

```php
unlockContact($idOrIntRef)
```

Unlock the contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact

try {
    $apiInstance->unlockContact($idOrIntRef);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unlockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |

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

## `updateContact()`

```php
updateContact($idOrIntRef, $contactUpdate)
```

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$contactUpdate = new \SynergiTech\Iplicit\Model\ContactUpdate(); // \SynergiTech\Iplicit\Model\ContactUpdate |

try {
    $apiInstance->updateContact($idOrIntRef, $contactUpdate);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate**](../Model/ContactUpdate.md)|  | [optional] |

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
