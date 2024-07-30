# SynergiTech\Iplicit\SaleQuoteApi

All URIs are relative to https://api.iplicit.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSaleQuote()**](SaleQuoteApi.md#createSaleQuote) | **POST** /api/SaleQuote | Create a sale quote |
| [**getSaleQuote()**](SaleQuoteApi.md#getSaleQuote) | **GET** /api/SaleQuote/{id} | Get a sale quote |
| [**getSaleQuotes()**](SaleQuoteApi.md#getSaleQuotes) | **GET** /api/SaleQuote | Get a list of sale quotes with a search filter |
| [**submitSaleQuote()**](SaleQuoteApi.md#submitSaleQuote) | **POST** /api/SaleQuote/{id}/submit | Submit a sale quote for authorisation. |
| [**updateSaleQuote()**](SaleQuoteApi.md#updateSaleQuote) | **PATCH** /api/SaleQuote/{idOrDocNo} | Update a sale quote |


## `createSaleQuote()`

```php
createSaleQuote($docCreate): string
```

Create a sale quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SaleQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$docCreate = new \SynergiTech\Iplicit\Model\DocCreate(); // \SynergiTech\Iplicit\Model\DocCreate

try {
    $result = $apiInstance->createSaleQuote($docCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleQuoteApi->createSaleQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getSaleQuote()`

```php
getSaleQuote($id, $include): \SynergiTech\Iplicit\Model\Doc
```

Get a sale quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SaleQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id or document number of the sale quote
$include = 'include_example'; // string

try {
    $result = $apiInstance->getSaleQuote($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleQuoteApi->getSaleQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id or document number of the sale quote | |
| **include** | **string**|  | [optional] |

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

## `getSaleQuotes()`

```php
getSaleQuotes($docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip): \SynergiTech\Iplicit\Model\DocSummary[]
```

Get a list of sale quotes with a search filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SaleQuoteApi(
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
    $result = $apiInstance->getSaleQuotes($docNo, $docType, $docTypeId, $contactAccount, $contactAccountId, $legalEntity, $legalEntityId, $currency, $project, $projectId, $description, $descriptionContains, $theirRef, $intRef, $legacyRef, $theirDocNo, $docClass, $docDateFrom, $docDateTo, $dueDateFrom, $dueDateTo, $lastModifiedFrom, $lastModifiedTo, $outstanding, $unmatched, $draft, $abandoned, $posted, $approved, $reversed, $take, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleQuoteApi->getSaleQuotes: ', $e->getMessage(), PHP_EOL;
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

## `submitSaleQuote()`

```php
submitSaleQuote($id)
```

Submit a sale quote for authorisation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SaleQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$id = 'id_example'; // string | Id of the sale quote

try {
    $apiInstance->submitSaleQuote($id);
} catch (Exception $e) {
    echo 'Exception when calling SaleQuoteApi->submitSaleQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the sale quote | |

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

## `updateSaleQuote()`

```php
updateSaleQuote($idOrDocNo, $docUpdate)
```

Update a sale quote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Iplicit\Api\SaleQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    config: $config
);
$idOrDocNo = 'idOrDocNo_example'; // string | Id or document number of the sale quote
$docUpdate = new \SynergiTech\Iplicit\Model\DocUpdate(); // \SynergiTech\Iplicit\Model\DocUpdate

try {
    $apiInstance->updateSaleQuote($idOrDocNo, $docUpdate);
} catch (Exception $e) {
    echo 'Exception when calling SaleQuoteApi->updateSaleQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idOrDocNo** | **string**| Id or document number of the sale quote | |
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
