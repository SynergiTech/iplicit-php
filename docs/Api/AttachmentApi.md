# SynergiTech\Iplicit\AttachmentApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAttachment()**](AttachmentApi.md#createAttachment) | **POST** /api/Attachment/create/{attributeRef}/{sourceId}/AttachmentGroup/{attachmentGroupId} | Create a new attachment on a specified source item |
| [**deleteAttachment()**](AttachmentApi.md#deleteAttachment) | **DELETE** /api/Attachment/{attachmentId} | Delete an attachment |
| [**getAttachmentDetails()**](AttachmentApi.md#getAttachmentDetails) | **GET** /api/Attachment/{attachmentId}/Details | Get attachment details |
| [**getAttachmentFile()**](AttachmentApi.md#getAttachmentFile) | **GET** /api/Attachment/{attachmentId}/File | Get attachment file |
| [**getAttachmentGroups()**](AttachmentApi.md#getAttachmentGroups) | **GET** /api/Attribute/{attributeRef}/AttachmentGroup | Get a list of attachment groups defined on a specified attribute. |
| [**getAttachmentsInGroup()**](AttachmentApi.md#getAttachmentsInGroup) | **GET** /api/Attachment/search/{attributeRef}/{sourceId}/AttachmentGroup/{attachmentGroupId} | Get a list of attachments in an attachment group on a specified source item with a search filter. |
| [**updateAttachmentDetails()**](AttachmentApi.md#updateAttachmentDetails) | **PATCH** /api/Attachment/{attachmentId} | Update attachment details |


## `createAttachment()`

```php
createAttachment($attributeRef, $sourceId, $attachmentGroupId, $domain, $file, $description, $documentDate): string
```

Create a new attachment on a specified source item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attributeRef = 'attributeRef_example'; // string | Id or name of the attribute
$sourceId = 'sourceId_example'; // string | id of the source item to attach to
$attachmentGroupId = 'attachmentGroupId_example'; // string | Id of the attachment group. Use special value 'other' to get attachments without a group.
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$file = '/path/to/file.txt'; // \SplFileObject | Attachment file information
$description = 'description_example'; // string | Attachment description
$documentDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Attachment document date

try {
    $result = $apiInstance->createAttachment($attributeRef, $sourceId, $attachmentGroupId, $domain, $file, $description, $documentDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->createAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeRef** | **string**| Id or name of the attribute | |
| **sourceId** | **string**| id of the source item to attach to | |
| **attachmentGroupId** | **string**| Id of the attachment group. Use special value &#39;other&#39; to get attachments without a group. | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **file** | **\SplFileObject****\SplFileObject**| Attachment file information | |
| **description** | **string**| Attachment description | [optional] |
| **documentDate** | **\DateTime**| Attachment document date | [optional] |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAttachment()`

```php
deleteAttachment($attachmentId, $domain): string
```

Delete an attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attachmentId = 'attachmentId_example'; // string | Id of the attachment
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->deleteAttachment($attachmentId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->deleteAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentId** | **string**| Id of the attachment | |
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

## `getAttachmentDetails()`

```php
getAttachmentDetails($attachmentId, $domain): \SynergiTech\Iplicit\Model\AttachmentRead
```

Get attachment details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attachmentId = 'attachmentId_example'; // string | Id of the attachment
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getAttachmentDetails($attachmentId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->getAttachmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentId** | **string**| Id of the attachment | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\AttachmentRead**](../Model/AttachmentRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentFile()`

```php
getAttachmentFile($attachmentId, $domain): \SplFileObject
```

Get attachment file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attachmentId = 'attachmentId_example'; // string | Id of the attachment
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getAttachmentFile($attachmentId, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->getAttachmentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentId** | **string**| Id of the attachment | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentGroups()`

```php
getAttachmentGroups($attributeRef, $domain): \SynergiTech\Iplicit\Model\AttachmentGroupRead[]
```

Get a list of attachment groups defined on a specified attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attributeRef = 'attributeRef_example'; // string | Id or type name of the attribute
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getAttachmentGroups($attributeRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->getAttachmentGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeRef** | **string**| Id or type name of the attribute | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |

### Return type

[**\SynergiTech\Iplicit\Model\AttachmentGroupRead[]**](../Model/AttachmentGroupRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentsInGroup()`

```php
getAttachmentsInGroup($attributeRef, $sourceId, $attachmentGroupId, $domain, $createdFrom, $fileName, $take, $skip): \SynergiTech\Iplicit\Model\AttachmentRead[]
```

Get a list of attachments in an attachment group on a specified source item with a search filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attributeRef = 'attributeRef_example'; // string | Id or name of the attribute
$sourceId = 'sourceId_example'; // string | Id of the source item
$attachmentGroupId = 'attachmentGroupId_example'; // string | Id of the attachment group. Use special value 'other' to get attachments without a group.
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$createdFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter attachments created after a specific date time
$fileName = 'fileName_example'; // string | Filter attachments with a specific file name
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getAttachmentsInGroup($attributeRef, $sourceId, $attachmentGroupId, $domain, $createdFrom, $fileName, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->getAttachmentsInGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attributeRef** | **string**| Id or name of the attribute | |
| **sourceId** | **string**| Id of the source item | |
| **attachmentGroupId** | **string**| Id of the attachment group. Use special value &#39;other&#39; to get attachments without a group. | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **createdFrom** | **\DateTime**| Filter attachments created after a specific date time | [optional] |
| **fileName** | **string**| Filter attachments with a specific file name | [optional] |
| **take** | **int**| The number of records to return | [optional] [default to 100] |
| **skip** | **int**| The number of records to skip | [optional] [default to 0] |

### Return type

[**\SynergiTech\Iplicit\Model\AttachmentRead[]**](../Model/AttachmentRead.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttachmentDetails()`

```php
updateAttachmentDetails($attachmentId, $domain, $attachmentUpdate): string
```

Update attachment details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$attachmentId = 'attachmentId_example'; // string | Id of the attachment
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$attachmentUpdate = new \SynergiTech\Iplicit\Model\AttachmentUpdate(); // \SynergiTech\Iplicit\Model\AttachmentUpdate |

try {
    $result = $apiInstance->updateAttachmentDetails($attachmentId, $domain, $attachmentUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->updateAttachmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachmentId** | **string**| Id of the attachment | |
| **domain** | **string**| Your assigned domain name. Required for all API requests. | |
| **attachmentUpdate** | [**\SynergiTech\Iplicit\Model\AttachmentUpdate**](../Model/AttachmentUpdate.md)|  | [optional] |

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
