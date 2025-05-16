# SynergiTech\Iplicit\DocumentAttachmentApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDocumentAttachment()**](DocumentAttachmentApi.md#createDocumentAttachment) | **POST** /api/Document/{docRef}/AttachmentGroup/{attachmentGroupId}/Attachment | Create a new attachment on a sepcified document. |
| [**getDocumentAttachmentGroups()**](DocumentAttachmentApi.md#getDocumentAttachmentGroups) | **GET** /api/DocumentType/{docTypeRef}/AttachmentGroup | Get a list of attachment groups defined on a specified document type. |
| [**getDocumentAttachmentsInGroup()**](DocumentAttachmentApi.md#getDocumentAttachmentsInGroup) | **GET** /api/Document/{docRef}/AttachmentGroup/{attachmentGroupId}/Attachment | Get a list of attachments in an attachment group on a specified document with a search filter. |


## `createDocumentAttachment()`

```php
createDocumentAttachment($docRef, $attachmentGroupId, $domain, $file, $description, $documentDate): string
```

Create a new attachment on a sepcified document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DocumentAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docRef = 'docRef_example'; // string | Id, document number or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the document to search
$attachmentGroupId = 'attachmentGroupId_example'; // string | Id of the attachment group. Use special value 'other' to get attachments without a group.
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$file = '/path/to/file.txt'; // \SplFileObject | Attachment file information
$description = 'description_example'; // string | Attachment description
$documentDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Attachment document date

try {
    $result = $apiInstance->createDocumentAttachment($docRef, $attachmentGroupId, $domain, $file, $description, $documentDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentApi->createDocumentAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docRef** | **string**| Id, document number or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the document to search | |
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

## `getDocumentAttachmentGroups()`

```php
getDocumentAttachmentGroups($docTypeRef, $domain): \SynergiTech\Iplicit\Model\AttachmentGroupRead[]
```

Get a list of attachment groups defined on a specified document type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DocumentAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docTypeRef = 'docTypeRef_example'; // string | Id or code of the document type
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.

try {
    $result = $apiInstance->getDocumentAttachmentGroups($docTypeRef, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentApi->getDocumentAttachmentGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docTypeRef** | **string**| Id or code of the document type | |
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

## `getDocumentAttachmentsInGroup()`

```php
getDocumentAttachmentsInGroup($docRef, $attachmentGroupId, $domain, $createdFrom, $fileName, $take, $skip): \SynergiTech\Iplicit\Model\AttachmentRead[]
```

Get a list of attachments in an attachment group on a specified document with a search filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Bearer
$config = SynergiTech\Iplicit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SynergiTech\Iplicit\Api\DocumentAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docRef = 'docRef_example'; // string | Id, document number or <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a> of the document to search
$attachmentGroupId = 'attachmentGroupId_example'; // string | Id of the attachment group. Use special value 'other' to get attachments without a group.
$domain = 'domain_example'; // string | Your assigned domain name. Required for all API requests.
$createdFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter attachments created after a specific date time
$fileName = 'fileName_example'; // string | Filter attachments with a specific file name
$take = 100; // int | The number of records to return
$skip = 0; // int | The number of records to skip

try {
    $result = $apiInstance->getDocumentAttachmentsInGroup($docRef, $attachmentGroupId, $domain, $createdFrom, $fileName, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentApi->getDocumentAttachmentsInGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docRef** | **string**| Id, document number or &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; of the document to search | |
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
