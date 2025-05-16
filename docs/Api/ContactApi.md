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
createContact($domain, $contactCreate): string
```

Create a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$contactCreate = new \SynergiTech\Iplicit\Model\ContactCreate(); // \SynergiTech\Iplicit\Model\ContactCreate

try {
    $result = $apiInstance->createContact($domain, $contactCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **contactCreate** | [**\SynergiTech\Iplicit\Model\ContactCreate**](../Model/ContactCreate.md)|  | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($idOrIntRef, $domain)
```

Delete a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->deleteContact($idOrIntRef, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($idOrIntRef, $domain): \SynergiTech\Iplicit\Model\ContactRead
```

Get a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getContact($idOrIntRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\ContactRead**](../Model/ContactRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockContact()`

```php
lockContact($idOrIntRef, $domain)
```

Lock the contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->lockContact($idOrIntRef, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->lockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlockContact()`

```php
unlockContact($idOrIntRef, $domain)
```

Unlock the contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $apiInstance->unlockContact($idOrIntRef, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unlockContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($idOrIntRef, $domain, $contactUpdate)
```

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrIntRef = 'idOrIntRef_example'; // string | Id or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the contact
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$contactUpdate = new \SynergiTech\Iplicit\Model\ContactUpdate(); // \SynergiTech\Iplicit\Model\ContactUpdate |

try {
    $apiInstance->updateContact($idOrIntRef, $domain, $contactUpdate);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrIntRef** | **string**| Id or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the contact | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **contactUpdate** | [**\SynergiTech\Iplicit\Model\ContactUpdate**](../Model/ContactUpdate.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
