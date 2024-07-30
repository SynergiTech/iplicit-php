# SynergiTech\Iplicit\DocumentApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**abandonDocument()**](DocumentApi.md#abandonDocument) | **POST** /api/Document/{idOrDocNo}/abandon | Abandon a draft document. |
| [**addAllocationToDocument()**](DocumentApi.md#addAllocationToDocument) | **POST** /api/Document/{docIdOrCode}/allocation | Add an allocation to the document |
| [**addDocumentDetailLine()**](DocumentApi.md#addDocumentDetailLine) | **POST** /api/Document/{docRef}/detail | Add a document detail line |
| [**amendDocument()**](DocumentApi.md#amendDocument) | **PATCH** /api/Document/{idOrDocNo}/amend | Amend a document |
| [**convertDocumentType()**](DocumentApi.md#convertDocumentType) | **POST** /api/Document/{fromDocId}/convert/{toDocType} | Convert a document to another type |
| [**createDocument()**](DocumentApi.md#createDocument) | **POST** /api/Document | Create a document |
| [**deleteDocumentDetailLine()**](DocumentApi.md#deleteDocumentDetailLine) | **DELETE** /api/Document/{docRef}/detail/{docDetailRef} | Delete a document detail line |
| [**disputeDocument()**](DocumentApi.md#disputeDocument) | **POST** /api/Document/{idOrDocNo}/dispute | Dispute a document |
| [**getDocument()**](DocumentApi.md#getDocument) | **GET** /api/Document/{idOrDocNo} | Get a document by id or document number |
| [**getDocumentByIntRef()**](DocumentApi.md#getDocumentByIntRef) | **GET** /api/Document/intref/{intRef} | Get a document by the &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;internal reference&lt;/a&gt; |
| [**getDocumentMatchDetails()**](DocumentApi.md#getDocumentMatchDetails) | **GET** /api/Document/{idOrDocNo}/match/details | Get document match details. |
| [**getDocumentMatchReverse()**](DocumentApi.md#getDocumentMatchReverse) | **GET** /api/Document/{idOrDocNo}/match/reverse | Get document match reverse details. |
| [**getDocumentMatchSummary()**](DocumentApi.md#getDocumentMatchSummary) | **GET** /api/Document/{idOrDocNo}/match/outstanding/amount | Get document match summary (amount only). |
| [**getDocuments()**](DocumentApi.md#getDocuments) | **GET** /api/Document | Get a list of documents with a search filter |
| [**submitDocument()**](DocumentApi.md#submitDocument) | **POST** /api/Document/{docId}/submit | Submit the document for authorisation and posting. |
| [**unauthoriseDocument()**](DocumentApi.md#unauthoriseDocument) | **POST** /api/Document/{idOrDocNo}/unauthorise | Unauthorise an approved document (non GL documents only). |
| [**unpostDocument()**](DocumentApi.md#unpostDocument) | **POST** /api/Document/{idOrDocNo}/unpost | Unpost a document |
| [**updateDocument()**](DocumentApi.md#updateDocument) | **PATCH** /api/Document/{idOrDocNo} | Update a document |
| [**updateDocumentDetailLine()**](DocumentApi.md#updateDocumentDetailLine) | **PATCH** /api/Document/{docRef}/detail/{docDetailRef} | Update a document detail line |
| [**updateDocumentDetailLineObsolete()**](DocumentApi.md#updateDocumentDetailLineObsolete) | **PATCH** /api/Document/detail/{docDetailId} | Update a document detail line |


## `abandonDocument()`

```php
abandonDocument($idOrDocNo, $docClassArg): int
```

Abandon a draft document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document.
$docClassArg = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class

try {
    $result = $apiInstance->abandonDocument($idOrDocNo, $docClassArg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->abandonDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document. | |
| **docClassArg** | [**DocClass**](../Model/.md)| The document class | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addAllocationToDocument()`

```php
addAllocationToDocument($docIdOrCode, $docId, $docClass, $docAllocationCreate): string
```

Add an allocation to the document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docIdOrCode = 'docIdOrCode_example'; // string
$docId = 'docId_example'; // string | The document id
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docAllocationCreate = new \SynergiTech\Iplicit\Model\DocAllocationCreate(); // \SynergiTech\Iplicit\Model\DocAllocationCreate

try {
    $result = $apiInstance->addAllocationToDocument($docIdOrCode, $docId, $docClass, $docAllocationCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->addAllocationToDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docIdOrCode** | **string**|  | |
| **docId** | **string**| The document id | [optional] |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docAllocationCreate** | [**\SynergiTech\Iplicit\Model\DocAllocationCreate**](../Model/DocAllocationCreate.md)|  | [optional] |

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

## `addDocumentDetailLine()`

```php
addDocumentDetailLine($docRef, $docClass, $docDetailUpdate)
```

Add a document detail line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docRef = 'docRef_example'; // string | The document reference
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docDetailUpdate = new \SynergiTech\Iplicit\Model\DocDetailUpdate(); // \SynergiTech\Iplicit\Model\DocDetailUpdate

try {
    $apiInstance->addDocumentDetailLine($docRef, $docClass, $docDetailUpdate);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->addDocumentDetailLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docRef** | **string**| The document reference | |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docDetailUpdate** | [**\SynergiTech\Iplicit\Model\DocDetailUpdate**](../Model/DocDetailUpdate.md)|  | [optional] |

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

## `amendDocument()`

```php
amendDocument($idOrDocNo, $documentAmend): string
```

Amend a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Document id or number.
$documentAmend = new \SynergiTech\Iplicit\Model\DocumentAmend(); // \SynergiTech\Iplicit\Model\DocumentAmend

try {
    $result = $apiInstance->amendDocument($idOrDocNo, $documentAmend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->amendDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Document id or number. | |
| **documentAmend** | [**\SynergiTech\Iplicit\Model\DocumentAmend**](../Model/DocumentAmend.md)|  | [optional] |

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

## `convertDocumentType()`

```php
convertDocumentType($fromDocId, $toDocType): string
```

Convert a document to another type

The document must be authorised / posted. The created document will fully match the source document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$fromDocId = 'fromDocId_example'; // string
$toDocType = 'toDocType_example'; // string

try {
    $result = $apiInstance->convertDocumentType($fromDocId, $toDocType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->convertDocumentType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDocId** | **string**|  | |
| **toDocType** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocument()`

```php
createDocument($docClass, $docCreate): string
```

Create a document

docClass parameter is no longer used

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docCreate = new \SynergiTech\Iplicit\Model\DocCreate(); // \SynergiTech\Iplicit\Model\DocCreate

try {
    $result = $apiInstance->createDocument($docClass, $docCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docCreate** | [**\SynergiTech\Iplicit\Model\DocCreate**](../Model/DocCreate.md)|  | [optional] |

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

## `deleteDocumentDetailLine()`

```php
deleteDocumentDetailLine($docRef, $docDetailRef, $docClass)
```

Delete a document detail line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docRef = 'docRef_example'; // string | The document reference
$docDetailRef = 'docDetailRef_example'; // string | The document detail reference
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class

try {
    $apiInstance->deleteDocumentDetailLine($docRef, $docDetailRef, $docClass);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocumentDetailLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docRef** | **string**| The document reference | |
| **docDetailRef** | **string**| The document detail reference | |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |

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

## `disputeDocument()`

```php
disputeDocument($idOrDocNo, $documentDispute): string
```

Dispute a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Document id or number.
$documentDispute = new \SynergiTech\Iplicit\Model\DocumentDispute(); // \SynergiTech\Iplicit\Model\DocumentDispute

try {
    $result = $apiInstance->disputeDocument($idOrDocNo, $documentDispute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->disputeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Document id or number. | |
| **documentDispute** | [**\SynergiTech\Iplicit\Model\DocumentDispute**](../Model/DocumentDispute.md)|  | [optional] |

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

## `getDocument()`

```php
getDocument($idOrDocNo, $docClass, $include): \SynergiTech\Iplicit\Model\Doc
```

Get a document by id or document number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id for document number of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class, optional
$include = 'include_example'; // string | Comma separated list of details to include: `details`, `payments`, `tax`, `allocations`.

try {
    $result = $apiInstance->getDocument($idOrDocNo, $docClass, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id for document number of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class, optional | [optional] |
| **include** | **string**| Comma separated list of details to include: &#x60;details&#x60;, &#x60;payments&#x60;, &#x60;tax&#x60;, &#x60;allocations&#x60;. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\Doc**](../Model/Doc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentByIntRef()`

```php
getDocumentByIntRef($intRef, $docClass, $include): \SynergiTech\Iplicit\Model\Doc
```

Get a document by the <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">internal reference</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$intRef = 'intRef_example'; // string | Internal reference of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class, optional
$include = 'include_example'; // string | Comma separated list of details to include: `details`, `payments`, `tax`, `allocations`.

try {
    $result = $apiInstance->getDocumentByIntRef($intRef, $docClass, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentByIntRef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **intRef** | **string**| Internal reference of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class, optional | [optional] |
| **include** | **string**| Comma separated list of details to include: &#x60;details&#x60;, &#x60;payments&#x60;, &#x60;tax&#x60;, &#x60;allocations&#x60;. | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\Doc**](../Model/Doc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentMatchDetails()`

```php
getDocumentMatchDetails($idOrDocNo, $docClass)
```

Get document match details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class

try {
    $apiInstance->getDocumentMatchDetails($idOrDocNo, $docClass);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentMatchDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class | [optional] |

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

## `getDocumentMatchReverse()`

```php
getDocumentMatchReverse($idOrDocNo, $docClass)
```

Get document match reverse details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class

try {
    $apiInstance->getDocumentMatchReverse($idOrDocNo, $docClass);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentMatchReverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class | [optional] |

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

## `getDocumentMatchSummary()`

```php
getDocumentMatchSummary($idOrDocNo, $docClass)
```

Get document match summary (amount only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class

try {
    $apiInstance->getDocumentMatchSummary($idOrDocNo, $docClass);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentMatchSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class | [optional] |

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

## `getDocuments()`

```php
getDocuments($docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip): \SynergiTech\Iplicit\Model\DocSummary[]
```

Get a list of documents with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docNo = 'docNo_example'; // string | The document number
$docType = 'docType_example'; // string | The document type code
$docTypeId = 'docTypeId_example'; // string | The document type id
$contactAccount = 'contactAccount_example'; // string | The document contact account code
$contactAccountId = 'contactAccountId_example'; // string | The document contact account id
$legalEntity = 'legalEntity_example'; // string | The document legal entity code
$legalEntityId = 'legalEntityId_example'; // string | The document legal entity id
$currency = 'currency_example'; // string | The document currency
$project = 'project_example'; // string | The document project code
$projectId = 'projectId_example'; // string | The document project id
$description = 'description_example'; // string | The document description
$descriptionContains = 'descriptionContains_example'; // string | The document description contains
$theirRef = 'theirRef_example'; // string | An external reference code
$intRef = 'intRef_example'; // string | Optional interface reference. If provided, it must be unique. <a href=\"https://docs.iplicit.com/dev/guide/identifiers/index.html\">Learn more</a>
$legacyRef = 'legacyRef_example'; // string | Alternative / legacy reference code
$theirDocNo = 'theirDocNo_example'; // string | An external document number
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document from date
$docDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document to date
$dueDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document due from date
$dueDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document due to date
$lastModifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document last modified from date
$lastModifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The document last modified to date
$outstanding = True; // bool | The document outstanding flag
$unmatched = True; // bool | The document unmatched flag
$draft = True; // bool | The document draft flag
$abandoned = True; // bool | The document abandoned flag
$posted = True; // bool | The document posted
$approved = True; // bool | The document approved flag
$reversed = True; // bool | The document reversed flag
$take = 56; // int | The number of documents to take
$skip = 56; // int | The number of documents to skip

try {
    $result = $apiInstance->getDocuments($docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docNo** | **string**| The document number | [optional] |
| **docType** | **string**| The document type code | [optional] |
| **docTypeId** | **string**| The document type id | [optional] |
| **contactAccount** | **string**| The document contact account code | [optional] |
| **contactAccountId** | **string**| The document contact account id | [optional] |
| **legalEntity** | **string**| The document legal entity code | [optional] |
| **legalEntityId** | **string**| The document legal entity id | [optional] |
| **currency** | **string**| The document currency | [optional] |
| **project** | **string**| The document project code | [optional] |
| **projectId** | **string**| The document project id | [optional] |
| **description** | **string**| The document description | [optional] |
| **descriptionContains** | **string**| The document description contains | [optional] |
| **theirRef** | **string**| An external reference code | [optional] |
| **intRef** | **string**| Optional interface reference. If provided, it must be unique. &lt;a href&#x3D;\&quot;https://docs.iplicit.com/dev/guide/identifiers/index.html\&quot;&gt;Learn more&lt;/a&gt; | [optional] |
| **legacyRef** | **string**| Alternative / legacy reference code | [optional] |
| **theirDocNo** | **string**| An external document number | [optional] |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docDateFrom** | **\DateTime**| The document from date | [optional] |
| **docDateTo** | **\DateTime**| The document to date | [optional] |
| **dueDateFrom** | **\DateTime**| The document due from date | [optional] |
| **dueDateTo** | **\DateTime**| The document due to date | [optional] |
| **lastModifiedFrom** | **\DateTime**| The document last modified from date | [optional] |
| **lastModifiedTo** | **\DateTime**| The document last modified to date | [optional] |
| **outstanding** | **bool**| The document outstanding flag | [optional] |
| **unmatched** | **bool**| The document unmatched flag | [optional] |
| **draft** | **bool**| The document draft flag | [optional] |
| **abandoned** | **bool**| The document abandoned flag | [optional] |
| **posted** | **bool**| The document posted | [optional] |
| **approved** | **bool**| The document approved flag | [optional] |
| **reversed** | **bool**| The document reversed flag | [optional] |
| **take** | **int**| The number of documents to take | [optional] |
| **skip** | **int**| The number of documents to skip | [optional] |

### Return type

[**\SynergiTech\Iplicit\Model\DocSummary[]**](../Model/DocSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitDocument()`

```php
submitDocument($docId, $docClass)
```

Submit the document for authorisation and posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docId = 'docId_example'; // string | Id of the document.
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | Document class

try {
    $apiInstance->submitDocument($docId, $docClass);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->submitDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docId** | **string**| Id of the document. | |
| **docClass** | [**DocClass**](../Model/.md)| Document class | [optional] |

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

## `unauthoriseDocument()`

```php
unauthoriseDocument($idOrDocNo, $docClassArg): int
```

Unauthorise an approved document (non GL documents only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document.
$docClassArg = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class

try {
    $result = $apiInstance->unauthoriseDocument($idOrDocNo, $docClassArg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->unauthoriseDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document. | |
| **docClassArg** | [**DocClass**](../Model/.md)| The document class | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpostDocument()`

```php
unpostDocument($idOrDocNo)
```

Unpost a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Document id or number.

try {
    $apiInstance->unpostDocument($idOrDocNo);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->unpostDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Document id or number. | |

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

## `updateDocument()`

```php
updateDocument($idOrDocNo, $docClass, $docUpdate)
```

Update a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the document
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docUpdate = new \SynergiTech\Iplicit\Model\DocUpdate(); // \SynergiTech\Iplicit\Model\DocUpdate

try {
    $apiInstance->updateDocument($idOrDocNo, $docClass, $docUpdate);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the document | |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docUpdate** | [**\SynergiTech\Iplicit\Model\DocUpdate**](../Model/DocUpdate.md)|  | [optional] |

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

## `updateDocumentDetailLine()`

```php
updateDocumentDetailLine($docRef, $docDetailRef, $docClass, $docDetailUpdate)
```

Update a document detail line

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docRef = 'docRef_example'; // string | The document reference
$docDetailRef = 'docDetailRef_example'; // string | The document detail reference
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docDetailUpdate = new \SynergiTech\Iplicit\Model\DocDetailUpdate(); // \SynergiTech\Iplicit\Model\DocDetailUpdate

try {
    $apiInstance->updateDocumentDetailLine($docRef, $docDetailRef, $docClass, $docDetailUpdate);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocumentDetailLine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docRef** | **string**| The document reference | |
| **docDetailRef** | **string**| The document detail reference | |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docDetailUpdate** | [**\SynergiTech\Iplicit\Model\DocDetailUpdate**](../Model/DocDetailUpdate.md)|  | [optional] |

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

## `updateDocumentDetailLineObsolete()`

```php
updateDocumentDetailLineObsolete($docDetailId, $docClass, $docDetailUpdate)
```

Update a document detail line

Use PATCH /doc/{docRef}/detail/{docDetailRef} instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docDetailId = 'docDetailId_example'; // string | The document detail id
$docClass = new \SynergiTech\Iplicit\Model\DocClass(); // DocClass | The document class
$docDetailUpdate = new \SynergiTech\Iplicit\Model\DocDetailUpdate(); // \SynergiTech\Iplicit\Model\DocDetailUpdate

try {
    $apiInstance->updateDocumentDetailLineObsolete($docDetailId, $docClass, $docDetailUpdate);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocumentDetailLineObsolete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docDetailId** | **string**| The document detail id | |
| **docClass** | [**DocClass**](../Model/.md)| The document class | [optional] |
| **docDetailUpdate** | [**\SynergiTech\Iplicit\Model\DocDetailUpdate**](../Model/DocDetailUpdate.md)|  | [optional] |

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
